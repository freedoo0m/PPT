<?php
  //session开启
  session_start();
  define("AppName","PPT");
  //Db
  include_once "../shared/db.php";

  $db = new Db();
?>

<!Doctype html />
<html xmlns=http://www.w3.org/1999/xhtml>
	<head>
		<meta http-equiv=Content-Type content="text/html;charset=gbk">
		<link href="../css/css.css" type=text/css rel=stylesheet>
</head>
	<body>
		<div class="wrap">
        	<!--头部-->
			<div class="head">
              <div class="zhuce"><a href="#">注册</a></div>
              <div class="xiexian">|</div>
              <div class="denglu"><a href="#">登录</a></div>
      </div>
      <!--导航-->
      <div class='content'>
              <div class="daohang">
                  <div class="shouye" align="center">
                    <a href="#">网站首页</a>
                    </div>
                    <div class="xinwendongtai" align="center">
                    <a href="#">新闻动态</a>
                    </div>
                    <div class="fanlizhanshi" align="center">
                    <a href="#">范例展示</a>
                    </div>
                    <div class="PPTjiaocheng" align="center">
                    <a href="#">PPT教程</a>
                    </div>
                    <div class="wangyesucai" align="center">
                    <a href="#">网页素材</a>
                    </div>
                    <div class="wangzhanhuodong" align="center">
                    <a href="#">网页活动</a>
                    </div>
                    <div class="lianxiwomen" align="center">
                    <a href="#">联系我们</a>
                    </div>
                </div>
                <!--flash-->
                <div class="flash">
                <img src="../images/flash.jpg"/>
                </div>
      </div>
            
