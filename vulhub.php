<!DOCTYPE html>
<?php
header("Referer: https://www.cnblogs.com/zovt");
header("Orign: https://www.cnblogs.com/zovt");
?>
<html lang="zh-cn">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="referrer" content="origin-when-cross-origin" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Vulhub靶场</title>
    <link id="favicon" rel="shortcut icon" href="//common.cnblogs.com/favicon.svg" type="image/svg+xml" />
    <link type="text/css" rel="stylesheet" href="./vcss/custom.css" />
    <link type="text/css" rel="stylesheet" href="./vcss/add.css" />
    <link type="application/rss+xml" rel="alternate" href="https://www.cnblogs.com/zovt/rss" />
    <link type="application/rsd+xml" rel="EditURI" href="https://www.cnblogs.com/zovt/rsd.xml" />
    <link type="application/wlwmanifest+xml" rel="wlwmanifest" href="https://www.cnblogs.com/zovt/wlwmanifest.xml" />
    <style>
    </style>
    <script>
        var currentBlogId = 710618;
        var currentBlogApp = 'Vulhub';
        var isLogined = false;
        var isBlogOwner = false;
        var skinName = 'Custom';
        var visitorUserId = '';
        var hasCustomScript = true;
        try {
            if (hasCustomScript && document.referrer && document.referrer.indexOf('baidu.com') >= 0) {
                Object.defineProperty(document, 'referrer', { value: '' });
                Object.defineProperty(Document.prototype, 'referrer', { get: function () { return ''; } });
            }
        } catch (error) { }
        window.cb_enable_mathjax = false;
        window.mathEngine = 0;
        window.codeHighlightEngine = 1;
        window.enableCodeLineNumber = false;
        window.codeHighlightTheme = 'cnblogs';
        window.darkModeCodeHighlightTheme = 'vs2015';
        window.isDarkCodeHighlightTheme = false;
        window.isDarkModeCodeHighlightThemeDark = true;
        window.isDisableCodeHighlighter = false;
        window.enableCodeThemeTypeFollowSFystem = false;
        window.enableMacStyleCodeBlock = false
    </script>
    <script>
        function todir(name) {
            document.getElementById("my").value = name;
            document.forms[0].submit();
        }

    </script>
    <script>
        var currentPostDateAdded = '2023';
    </script>

    <script src="./js/jquery-2.2.0.min.js"></script>
    <script src="./js/blog-common.min.js?v=tCybvV2GkzIt186dpeAg3OkMSZ75PFwEFewjTxxLUBo"></script>
</head>

<body class="skin-custom no-navbar">
    <a name="top"></a>
    </div>
    <div id="page_begin_html">
        <link href="./vcss/cute-cnblogs2.css" rel="stylesheet">
        <script src='./js/canvas2.js'></script>
        <!--
<link href="//files.cnblogs.com/files/linianhui/lnh.cnblogs.css" rel="stylesheet"/>-->
        <div id="set_btn_box">
            <div class="set_btn fly_top fadeIn animated">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-zhiding"></use>
                </svg>
            </div>
            <div class="set_btn article_icon_btn catalogue_btn">
                <svg class="icon" aria-hidden="true" style="color:#97A1A7">
                    <use xlink:href="#icon-dagang"></use>
                </svg>
            </div>
            <div class="set_btn article_icon_btn comment">
                <a href="#comment_form_container"><svg class="icon" aria-hidden="true" style="color:#97A1A7">
                        <use xlink:href="#icon-linedesign-01"></use>
                    </svg></a>
            </div>
            <div class="set_btn skin_btn">
                <svg class="icon" aria-hidden="true" style="color:#97A1A7">
                    <use xlink:href="#icon-pifu"></use>
                </svg>
            </div>
            <div class="set_btn gratuity">
                <svg class="icon" aria-hidden="true" style="color:#97A1A7">
                    <use xlink:href="#icon-dashang"></use>
                </svg>
            </div>
            <div class="set_btn article_icon_btn artice_recommend">
                <svg class="icon" aria-hidden="true" style="color:#97A1A7">
                    <use xlink:href="#icon-tuijian2"></use>
                </svg>
            </div>
            <div id="thumsCanvas" width="200" height="400" style="width:100px;height:200px"></div>
            <div class="set_btn catalogue">
                <svg class="icon" aria-hidden="true" style="color:#97A1A7">
                    <use xlink:href="#icon-cebianlan-"></use>
                </svg>
            </div>
        </div>
    </div>
    <!--done-->
    <div id="home">
        <div id="header">
            <div id="blogTitle">


                <!--done-->
                <h1><a id="Header1_HeaderTitle" class="headermaintitle HeaderMainTitle" href="#">Vulhub靶场</a>
                </h1>
                <h2></h2>
            </div><!--end: blogTitle 博客的标题和副标题 -->
            <!-- 顶部导航栏 -->
            <div id="navigator">
                <ul id="navList">
                    <li><a id="blog_nav_sitehome" class="menu" href="">
                        </a>
                    </li>
                    <li>
                        <a id="blog_nav_myhome" class="menu" href="">
                        </a>
                    </li>
                    <li>

                        <a id="blog_nav_newpost" class="menu" href="">
                        </a>
                    </li>
                    <li>
                        <a id="blog_nav_contact" class="menu" href="">
                        </a>
                    </li>

                </ul>


                <div class="blogStats">
                    <div id="blog_stats_place_holder">
                    </div>
                </div><!--end: blogStats -->
            </div><!--end: navigator 博客导航栏 -->
        </div><!--end: header 头部 -->
        <form action='?' method='get'>
            <input type='hidden' name='dir' value='' id='my'>
        </form>
        <!--自动提交表单-->
        <div id="main">
            <div id="mainContent">
                <div id="topics">
                    <div class="post">
                        <h1 class="postTitle">
                            <a id="cb_post_title_url" class="postTitle2 vertical-middle" href="#">
                                <span role="heading" aria-level="2" class="heading">Vulhub靶场目录</span>
                            </a>
                        </h1>
                    </div>

                    <div id="blog_post_info_block" role="contentinfo">

                        <div id="post_next_prev"></div>
                    </div>
                </div>

            </div>

            <!-- 定义弹窗的 id 和内容 -->
            <div class="modal" id="modal">
                <h1>这是一个弹窗</h1>
                <hr />
                <div class='timectl'>
                    <span class='tit'>剩余时间--10s</span>
                    <progress value="0" max="100" id="pbar"></progress>
                    <a class='resport' target="_black">192.168.120.128:80</a>
                </div>
                <div class='ctl'>
                    <button class="button-82-pushable" role="button" id='start' onclick='beginenv()'>
                        <span class="button-82-shadow"></span>
                        <span class="button-82-edge"
                            style='background:linear-gradient(to left, hsl(86.77deg 100% 16%) 0%, hsl(113.16deg 100% 32%) 8%, hsl(113.02deg 100% 32%) 92%, hsl(118.7deg 100% 16%) 100%);'></span>
                        <span class="button-82-front text" style="background-color: #4CAF50;">
                            开启环境
                        </span>
                    </button>
                    <button class="button-82-pushable" role="button" id='delay' onclick='delaytime()'>
                        <span class="button-82-shadow"></span>
                        <span class="button-82-edge"
                            style='background:linear-gradient(to left, hsl(86.77deg 100% 16%) 0%, hsl(113.16deg 100% 32%) 8%, hsl(113.02deg 100% 32%) 92%, hsl(118.7deg 100% 16%) 100%);'></span>
                        <span class="button-82-front text" style="background-color: #4CAF50;">
                            延长时间
                        </span>
                    </button>
                    <button class="button-82-pushable" role="button" id='stop' onclick="stopenv()"
                        style="display: none;">
                        <span class="button-82-shadow"></span>
                        <span class="button-82-edge"></span>
                        <span class="button-82-front text">
                            关闭环境
                        </span>
                    </button>
                </div>

                <!-- 添加关闭弹窗的按钮，链接地址是 # -->
                <span id='close' onclick='closewin()'>x</span>
            </div>
            <div class='mask'></div>
            <script>
                var st = document.querySelector('.modal');
                var body = document.querySelector('html');
                var mask = document.querySelector('.mask');
                var delay = document.querySelector("#delay");
                var begin = document.querySelector('#start');
                var stop = document.querySelector('#stop');
                var time = document.querySelector('.tit');
                var timepg = document.querySelector('#pbar');
                var timectl = document.querySelector('.timectl');
                var portres = document.querySelector('.resport');
                var timer;
                const total = 1000;
                const url = 'http://192.168.120.128/vm-share/docker.php';
                window.leaftime = 1000;
                //功能实现函数
                function updatetime() {
                    window.showtime--;
                    time.innerHTML = '剩余时间--' + window.showtime + 's';
                    var value = (1 - window.showtime / total) * 100;
                    timepg.value = value;
                }
                function timectl() {

                }
                //点击事件函数
                function startwin(name) {
                    window.docker = name;
                    var tit = document.querySelector('.modal h1');
                    tit.innerHTML = name;
                    if (window.currentdocker && window.docker != window.currentdocker) {
                        alert('请关闭另一个环境');
                    }
                    else {
                        st.style.display = 'inline-block';
                        st.style.zIndex = 10;
                        body.style.overflowY = 'hidden';
                        mask.style.display = 'block';
                    }
                }
                function closewin() {
                    st.style.display = 'none';
                    st.style.zIndex = 3;
                    body.style.overflowY = 'scroll';
                    mask.style.display = 'none';

                }
                function beginenv() {
                    delay.style.display = 'block';
                    begin.style.display = 'none';
                    stop.style.display = 'block';
                    timectl.style.display = 'block';
                    window.currentdocker = window.docker
                    time.innerHTML = '剩余时间--' + total + 's';
                    //发送ajex
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.open('POST', url, true);
                    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            var res = xmlhttp.responseText;
                            alert(res);
                            var js = JSON.parse(res); // 转化为JS对象
                            if (js['code'] == '200') {
                                alert(js['port']);
                                portres.href = 'http://192.168.120.128' + js['port'];
                                portres.innerHTML = 'http://192.168.120.128' + js['port'];
                                portres.style.display = 'block';
                            }
                        }
                    }
                    xmlhttp.send('docker_name=' + window.currentdocker + '&path=' + window.path + '&action=start');

                    window.showtime = window.leaftime
                    timer = setInterval(updatetime, 1000);
                }
                function delaytime() {
                    if (window.showtime < 990) {
                        window.showtime += 10;
                        //发送ajex
                    }
                }
                function stopenv() {
                    begin.style.display = 'block';
                    delay.style.display = 'none';
                    stop.style.display = 'none';
                    timectl.style.display = 'none';
                    clearInterval(timer);
                    //发送ajex
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.open('POST', url, true);
                    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            var res = xmlhttp.responseText;
                            var js = JSON.parse(res);
                            if (js['code'] != '200') {
                                alert(js['status']);
                            }
                            else {
                                alert('关闭成功');
                                window.currentdocker = null;
                            }
                        }
                    }
                    xmlhttp.send('action=stop&path=' + window.path + '&docker_name=' + window.currentdocker);

                }
                function strict() {

                }
            </script>
            <div class="list">
                <?php
                if (isset($_GET['dir'])) {
                    echo '<span class="item" onclick="' . "location.href='http://192.168.120.128/vm-share/vulhub.php'" . '">返回上层</span></a>';
                    $dir = $_GET['dir'];
                    if ($dir != '') {
                        if (!preg_match('/' . $dir . '/', shell_exec('ls /var/www/html/vulhub' . ' 2>&1'))) {
                            echo "<script>alert('no-dir'); location.href = 'http://192.168.120.128/vm-share/vulhub.php'</script>";
                            exit();
                        }
                        $output = shell_exec('ls /var/www/html/vulhub/' . $dir . ' 2>&1');
                        $dirarr = explode("\n", $output);
                        $dirarr = array_filter($dirarr);
                        foreach ($dirarr as $k) {
                            echo "<span class='item' onclick='startwin(" . '"' . $k . '"' . ")'>" . $k . "</span>\n";
                        }
                        echo " <script>
                            var tit = document.querySelector('.heading');
                            tit.innerHTML = 'Vulhub-" . $dir . "目录';
                            window.path = '" . $dir . "'
                        </script>";


                    }
                } else {
                    $output = shell_exec('ls /var/www/html/vulhub' . ' 2>&1');
                    $arr = explode("\n", $output);
                    $arr = array_filter($arr);
                    $fiterarr = array(
                        'README.md',
                        'LICENSE',
                        'README.zh-cn.md',
                        'environments.toml',
                        'contributors.md',
                        'contributors.zh-cn.md'
                    );
                    foreach ($arr as $key) {
                        if (in_array($key, $fiterarr)) {
                            ;
                        } else {
                            echo '<span class="item" onclick="todir(' . "'" . $key . "'" . ')">' . $key . "</span>\n";
                        }
                    }
                }
                ?>
            </div>



            <div class="postDesc">posted @
                <span id="post-date" data-last-update-days="404.0360707149641"
                    data-date-created="BlogServer.Application.Dto.BlogPost.BlogPostDto"
                    data-date-updated="2022-06-04 16:13">2023</span>&nbsp;
                <a href="#">Yyj</a>&nbsp;
            </div>
        </div><!--end: topics 文章、评论容器-->
    </div>

    <script type="text/javascript">
        // window.tocManager.displayDisableTocTips = false;
        // window.tocManager.generateToc();
        // setTimeout(function () { countViews(cb_blogId, cb_entryId); }, 50);
        // deliverT2();
        // deliverC1C2();
        // loadNewsAndKb();
        // LoadPostCategoriesTags(cb_blogId, cb_entryId);
        // LoadPostInfoBlock(cb_blogId, cb_entryId, cb_blogApp, cb_blogUserGuid);
        // GetPrevNextPost(cb_entryId, cb_blogId, cb_entryCreatedDate, cb_postType);
        // loadOptUnderPost();
        // GetHistoryToday(cb_blogId, cb_blogApp, cb_entryCreatedDate);
    </script>
    </div>
    </div><!--end: forFlow -->
    </div><!--end: mainContent 主体内容容器-->
    <div id="sideBar">
        <div id="sideBarMain">
            <div id="sidebar_news" class="newsItem">
                <div id="blog-news">
                    <div id="sidebar_news_content">
                    </div>
                </div>
            </div>
            <div id="sidebar_c3"></div>
            <div id="blog-calendar" style="display:none"></div>
            <div id="leftcontentcontainer">
                <div id="blog-sidecolumn"></div>
            </div>
        </div><!--end: sideBarMain -->
    </div><!--end: sideBar 侧边栏容器 -->
    <div class="clear"></div>
    </div><!--end: main -->
    <div class="clear"></div>
    <div id="footer">
        <!--done-->
        Copyright &copy; 2023 Yyj
        <br /><span id="poweredby">Powered by php</span>



    </div><!--end: footer -->
    </div><!--end: home 自定义的最大容器 -->



    <div id="page_end_html">
        <style id="ceshicss">
            @media (max-width: 767px) {
                #set_btn_box {
                    width: 100vw;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background: hsla(0, 0%, 100%, .6);
                    height: 49px;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 12px 40px;
                    border-top: 1px solid #e8e8e8;
                    box-sizing: border-box;
                }

                .set_btn {
                    margin-top: 0;
                }

                .set_btn.fly_top.fadeIn.animated {
                    position: absolute;
                    right: 10px;
                    bottom: 60px;
                }

                .container {
                    bottom: 50px
                }
            }

            #mainContent {
                width: 90%
            }
        </style>
        <link href="./vcss/tippy.min.css" rel="stylesheet">
        <script src="./js/popper.min.js"></script>
        <script src="./js/tippy.js"></script>
        <link rel='stylesheet' href='./vcss/animate.min.css'>
        <script src="./js/font_1825850_klax1ao4o6.js"></script>
        <script src="./js/three.min.js"></script>
        <script src='./js/star.js'></script>
        <link rel="stylesheet" href="./vcss/OwO.min.css" />
        <script src="https://files.cnblogs.com/files/blogs/710618/OwO2.min.js"></script>
        <script src="./js/cute-cnblogs3.js"></script>
        <script src="./js/monitoring2.js"></script>

        <script>


        </script>
        <!-- 点赞 -->
        <div width="1777" height="841"
            style="position: fixed; left: 0px; top: 0px; z-index: 2147483647; pointer-events: none;"></div>
        <script src="./js/mouse-click.js"></script>

        <!-- 以下内容是否添加你随意 -->

        <script>
            /*在文章页面添加古诗词*/
            $("#navigator").after('<div class="poem-wrap"><div class="poem-border poem-left"></div><div class="poem-border poem-right"></div><h1>念两句诗</h1><div id="poem_sentence"></div><div id="poem_info"></div></div>')
        </script>
        <script src="./js/jinrishici.js" charset="utf-8"></script>
        <script type="text/javascript">
            jinrishici.load(function (result) {
                var sentence = document.querySelector("#poem_sentence")
                var info = document.querySelector("#poem_info")
                sentence.innerHTML = result.data.content
                info.innerHTML = '【' + result.data.origin.dynasty + '】' + result.data.origin.author + '《' + result.data.origin.title + '》'
            });
        </script>

        <script type="text/javascript">
            /* 鼠标特效，我觉得太花哨了就注释了，喜欢的自己打开注释就可以 */
            var a_idx = 0;
            jQuery(document).ready(function ($) {
                $("body").click(function (e) {
                    var a = new Array("❤去活出你自己。❤", "❤今天的好计划胜过明天的完美计划。❤", "❤不要轻言放弃，否则对不起自己。❤", "❤紧要关头不放弃，绝望就会变成希望。❤", "❤如果不能改变结果，那就完善过程。❤", "❤好好活就是干有意义的事，有意义的事就是好好活！❤", "❤你真正是谁并不重要，重要的是你的所做所为。❤", "❤你不想为你的信仰冒一下险吗?难道想等你老了，再后悔莫及吗?❤", "❤有些鸟儿是关不住的，它的每一根羽毛都闪耀着自由的光辉。❤", "❤决定我们成为什么样人的，不是我们的能力，而是我们的选择。❤", "❤掉在水里你不会淹死，呆在水里你才会淹死，你只有游，不停的往前游。❤", "❤有些路，只能一个人走。❤", "❤希望你眼眸有星辰，心中有山海。❤", "❤从此以梦为马，不负韶华。❤", "❤人的成就和差异决定于其业余时间。❤", "❤佛不要你皈依，佛要你欢喜。❤", "❤ダーリンのこと　大好きだよ❤", "❤小猫在午睡时，地球在转。❤", "❤我，混世大魔王，申请做你的小熊软糖。❤", "❤决定好啦，要暗暗努力。❤", "❤呐，做人呢最紧要开心。❤", "❤好想邀请你一起去云朵上打呼噜呀。❤", "❤永远年轻，永远热泪盈眶。❤", "❤我生来平庸，也生来骄傲。❤", "❤我走得很慢，但我从不后退。❤", "❤人间不正经生活手册。❤", "❤我是可爱的小姑娘，你是可爱。❤", "❤数学里，有个温柔霸道的词，有且仅有。❤", "❤吧唧一口，吃掉难过。❤", "❤你头发乱了哦。❤", "❤健康可爱，没有眼袋。❤", "❤日月星辰之外，你是第四种难得。❤", "❤你是否成为了了不起的成年人？❤", "❤大家都是第一次做人。❤", "❤何事喧哗？！❤", "❤人间有味是清欢。❤", "❤你笑起来真像好天气。❤", "❤风填词半句，雪斟酒一壶。❤", "❤除了自渡，他人爱莫能助。❤", "❤昨日种种，皆成今我。❤", "❤一梦入混沌 明月撞星辰❤", "❤保持独立 适当拥有❤", "❤谢谢你出现 这一生我很喜欢❤", "❤做自己就好了 我会喜欢你的❤", "❤太严肃的话，是没办法在人间寻欢作乐的❤", "❤愿你余生可随遇而安，步步慢。❤", "❤黄瓜在于拍，人生在于嗨❤", "❤奇变偶不变，符号看象限。❤", "❤从来如此，便对么？❤", "❤今天我这儿的太阳，正好适合晒钙 你呢❤", "❤未来可期，万事胜意。❤", "❤星光不问赶路人 时光不负有心人❤", "❤我当然不会试图摘月，我要月亮奔我而来❤", "❤女生要修炼成的五样东西： 扬在脸上的自信，长在心底的善良， 融进血里的骨气，刻进命里的坚强，深到骨子里的教养❤", "❤燕去燕归，沧海桑田。纵此生不见，平安惟愿❤", "❤我想认识你 趁风不注意❤", "❤我一直想从你的窗子里看月亮❤", "❤长大应该是变温柔，对全世界都温柔。❤", "❤别在深夜做任何决定❤", "❤山中何事，松花酿酒，春水煎茶。❤", "❤桃李春风一杯酒，江湖夜雨十年灯。❤", "❤欲买桂花同载酒，终不似，少年游。❤");
                    var le = Math.ceil(Math.random() * a.length);
                    var $i = $("<span></span>").text(a[le]);/*a[a_idx]*/
                    a_idx = (a_idx + 1) % a.length;
                    var x = e.pageX,
                        y = e.pageY;
                    $i.css({
                        "z-index": 999999999999999999999999999999999999999999999999999999999999999999999,
                        "top": y - 20,
                        "left": x,
                        "position": "absolute",
                        "font-weight": "bold",
                        "color": "rgb(" + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + ")"
                    });
                    $("body").append($i);
                    $i.animate({
                        "top": y - 180,
                        "opacity": 0
                    },
                        2000,
                        function () {
                            $i.remove();
                        });
                });
            });
        </script>

        <script>
            let ref = setInterval(function () {
                isaplay();
            }, 2000);
            function isaplay() {
                if ($(".aplayer-play").length == 1) {
                    $(".aplayer-play").click()
                    clearInterval(ref);
                }
            }
        </script>


        <!--音乐，只在PC端宽度>1000px时显示-->
        <!-- <link rel="stylesheet" href="https://blog-static.cnblogs.com/files/miluluyo/APlayer.min.css">
        <div id="player" class="aplayer aplayer-withlist aplayer-fixed" data-id="3116636104" data-server="netease"
            data-type="playlist" data-order="random" data-fixed="true" data-listfolded="true" data-theme="#2D8CF0">
        </div>
        <script src="https://blog-static.cnblogs.com/files/miluluyo/APlayer.min.js"></script> -->
        <script src="./js/Meting.min.js"></script>

        <!--猫，只在PC端显示，移动端不加载了，因为会卡顿页面-->

        <!-- <script>
            var mobile_flag = isMobile();
            if (mobile_flag) {
                //console.info("移动端")
            } else {
                //console.info("PC端")
                L2Dwidget.init({
                    "model": {
                        "jsonPath": "https://unpkg.com/live2d-widget-model-hijiki/assets/hijiki.model.json",
                        "scale": 1
                    },
                    "display": {
                        "position": "left",
                        "width": 100,
                        "height": 200,
                        "hOffset": 70,
                        "vOffset": 0
                    },
                    "mobile": {
                        "show": true,
                        "scale": 0.5
                    },
                    "react": {
                        "opacityDefault": 0.7,
                        "opacityOnHover": 0.2
                    }
                });
                window.onload = function () {
                    $("#live2dcanvas").attr("style", "position: fixed; opacity: 0.7; left: 70px; bottom: 0px; z-index: 1; pointer-events: none;")
                }
            }
        </script> -->
    </div>

    <input type="hidden" id="antiforgery_token"
        value="CfDJ8DuWIYDefEVJtUW7VadsHY9VMHlAedmDmp_H4G_JafjxxoVpO2yn1AiXZYsZd4efNaLJu2JZVQwYKuSyMGV0ng7tvumrTtGxEhtfJ5WOrDfNifjZTzBjyPCLR5Bx6-l8yR74x6TH7ynMy5brlp3khjE" />
    <script async src="./js/c.js?id=G-M95P3TTWJZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-M95P3TTWJZ');
    </script>

</body>

</html>