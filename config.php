<?php
//配置文件


//网站设置
////////////////////////////////
//默认靶场路径
$vulhub_path = '/var/www/html/vulhub';

//默认主机
//域名或ip
$ip = "192.168.120.128";
$port = '80';
////////////////////////////////


//数据库配置
////////////////////////////////
//默认数据库名
const db_name = 'vulhub';
//主机名
const db_host = '127.0.0.1';
//数据库用户名
const db_user = 'root';
//默认数据库密码
const db_pass = "root";
define('DB_HOST', db_host);
define('DB_USER', db_user);
define('DB_PASS', db_pass);
define('DB_NAME', db_name);
////////////////////////////////




//网站文件配置
/////////////////////////////////
$web_path = '/vm-share/';
//默认主页
$index = "vulhub.php";

//默认开启docker的文件
$dockerfile = 'docker.php';

//初始化文件
$setup = 'setup.php';


//网站高级设置
////////////////////////////////
//是否开启防御
$waf = false;