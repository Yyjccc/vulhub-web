<?php
include("config.php");
$data = array('code' => '500', 'status' => 'erro');
session_start();
function token()
{
    $salt = 'vulhub' . date("h:i:s");
    $token = md5($salt);
    $_SESSION['token'] = $token;
    setcookie('token', $token, time() + 3600 * 6, null, null, false, true);
}
class Docker
{
    public $runcmd = 'docker ps';
    public $vulhub_path;
    public function __construct($path)
    {
        $this->vulhub_path = $path;
    }


    public function checkrun($testname)
    {
        $testname = preg_replace('/CVE/', 'cve', $testname);
        $output = shell_exec($this->runcmd . ' 2>&1');
        if (preg_match("/$testname/", $output)) {
            return true;
        } else {
            return false;
        }
    }
    public function start_contain($path, $name)
    {
        $cmd = "cd $this->vulhub_path/$path/" . $name . ";sudo  docker-compose build;sudo docker-compose up -d";
        $output = shell_exec($cmd . ' 2>&1');
        $realname = preg_replace('/CVE/', 'cve', $name);
        if (!preg_match("/$realname/", $output)) {
            return false;
        }

        $cmd2 = 'sudo docker ps -f name=' . "$realname";
        $out = shell_exec($cmd2 . ' 2>&1');
        // // 使用preg_match_all函数来获取所有匹配的端口号
        preg_match_all('/:\d{3,5}/', $out, $matches);
        if (preg_match('/iptables/', $out)) {
            $cmd = "sudo systemctl docker restart";
            return $this->start_contain($path, $name);
        }
        return $matches;
    }
    public function stop_contain($path, $name)
    {
        $cmd = "cd $this->vulhub_path/$path/" . $name . ';sudo docker-compose down -v';
        $output = shell_exec($cmd . ' 2>&1');
        return preg_match("/WARNING/", $output);
    }
}
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) {
    if (mysqli_connect(DB_HOST, DB_USER, DB_PASS)) {
        echo "数据库连接错误";
        die();
    } else {
        $con = setupdb();
    }
}

//根据id查询值
function query_time($con, $id, $name = 'kali')
{
    global $data;
    $sql = 'select time from timer where id=' . $id . ';';
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);
    if ($row) {
        return $row['time'];

    } else {
        return 'value error';
    }
}
function updatetime($con, $id, $time)
{
    $time = strval(intval($time) + 3600);
    $sql = "update timer set time='" . $time . "' where id=$id";
    if (mysqli_query($con, $sql)) {
        return 'ok';
    } else {
        echo $id;
        return 'update error!';
    }

}
//返回id
function maxid($con)
{
    $sql = 'select max(id) from timer;';
    $obj = mysqli_query($con, $sql);
    $res = mysqli_fetch_assoc($obj);
    $id = intval($res["max(id)"]);
    return $id;
}
function add($con, $name, $time)
{
    global $data;
    $id = maxid($con) + 1;
    $sql = "insert into timer (name,id,exp,time) values('$name',$id,1,'$time')";
    if (mysqli_query($con, $sql)) {
        return $id;
    } else {
        echo json_encode($data);
        exit();
    }
}
function remove($con, $id)
{
    $sql = "update timer set exp=0 where id=$id";
    return mysqli_query($con, $sql);
}
function del($con, $id)
{
    $sql = 'delete from timer where id=' . $id;
    return mysqli_query($con, $sql);
}
if ($wad) {
    if (isset($_COOKIE['token'])) {
        if ($_COOKIE['token'] != $_SESSION['token']) {
            $data['status'] = 'hacker!';
            token();
            http_response_code(500);
            echo json_encode($data);
            exit();
        }
    } else {
        token();
        header("Location: http://$ip/$web_path" . "$index");
        exit();
    }
}
global $docker;
$docker = new Docker($vulhub_path);
// 定义一个函数，用于启动靶场
function start_challenge($challenge, $time, $name, $path, $check = false)
{
    global $docker;
    global $data;
    global $con;
    $data = array(
        'code' => '500',
        'status' => 'a docker is runing'
    );
    if (!$docker->checkrun($challenge)) {
        if (!isset($_SESSION['docker'])) {
            global $db;
            $id = add($con, $name, $time);
            $_SESSION['docker'] = $id;
            setcookie('docker', md5($id), time() + 3600 * 6, null, null, false, true);
            $port = $docker->start_contain($path, $challenge);
            if (is_array($port)) {
                if (isset($port[0][1])) {
                    $p = $port[0][1];
                    $data = array(
                        'code' => '200',
                        'status' => 'ok',
                        'port' => "$p",
                        'id' => "$id"
                    );
                } else {
                    if ($check) {
                        $data = array(
                            'code' => '500',
                            'status' => 'error',
                            'msg' => 'begain error,please check iptable'
                        );
                    } else {
                        shell_exec('sudo systemctl restart docker' . ' 2>&1');
                        start_challenge($challenge, $time, $name, $path, $check = true);
                    }
                }
                return $data;
            } else {

                $data['status'] = 'could found a run docker';
                $data['error'] = 'no array but is ' . $port . "!";
                if (!del($con, $id)) {
                    $data['error'] = 'sql error';
                }
            }
        }
    }
    return $data;
}
// 定义一个函数，用于停止靶场
function stop_challenge($challenge, $path, $id)
{
    global $docker;
    global $data;
    global $con;
    if (!remove($con, $id)) {
        $data['status'] = 'db error';
        return $data;
    }
    if ($docker->stop_contain($path, $challenge)) {
        $data['stastus'] = 'stop error';
    } else {
        unset($_SESSION['docker']);
        $data['code'] = '200';
        $data['status'] = 'finish';
    }
    return $data;
}

//定义延时函数
function delay_time($id, $name)
{
    global $data;
    global $con;
    $res = updatetime($con, $id, query_time($con, $id));
    if ($res == 'ok') {
        $data['code'] = '200';
    }
    $data['status'] = $res;
    echo json_encode($data);
}
//每次访问杀死超时的docker;
function control_kill($challenge, $path, $con)
{
    global $data;
    $time = query_time($con, maxid($con));
    if ($time == 'value error') {
        $data['warning'] = 'server run error';
    } else {
        if ($time = intval($time) + 6 * 3600 < time()) {
            stop_challenge($challenge, $path, maxid($con));
            $data['warning'] = 'a docker has time over';
        }
    }
}
// 定义一个靶场的名称
if (isset($_POST['docker_name']) && isset($_POST['path']) && isset($_POST['action'])) {
    $challenge = $_POST['docker_name'];
    // 调用函数，启动靶场
    $path = $_POST['path'];
    $total = 3 * 3600;
    $name = 'kali';
    //主程序
    $action = $_POST['action'];
    control_kill($challenge, $path, $con);
    if ($action === 'start') {
        if (isset($_SESSION['docker'])) {
            // http_response_code(500);
            $data['status'] = "Something went wrong!";
            echo json_encode($data);
        } else {
            $data = start_challenge($challenge, time(), $name, $path);
            if ($data['code'] == '500') {
                // http_response_code(500);
            }
            echo json_encode($data);
        }
    } elseif ($action === 'delay') {
        if (isset($_SESSION['docker'])) {
            delay_time($_SESSION['docker'], $name);
        } else {
            $data['status'] = 'no docker';
            echo json_encode($data);
        }
    } elseif ($action === 'stop') {
        $data = stop_challenge($challenge, $path, $_SESSION['docker']);
        echo json_encode($data);
    } elseif ($action === 'query') {
        $res = query_time($con, $_SESSION['docker']);
        if ($res == 'value error') {
            $data['status'] = 'arg error1';
        } else {
            $leave_time = $total - (time() - intval($res));
            $data['code'] = '200';
            $data['data'] = "$leave_time";
            $data['status'] = 'query ok';
            echo json_encode($data);
        }

    } else { //参数错误
        // 在输出任何内容之前，设置HTTP响应码为500
        http_response_code(500);
        // 输出错误信息或者自定义的错误页面
        $data['status'] = "Something went wrong!";
        echo json_encode($data);
    }

} else {
    $data['status'] = 'no args error1';
    echo json_encode($data);
}
?>