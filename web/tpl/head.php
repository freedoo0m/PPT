<?php
  //session����
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
        	<!--ͷ��-->
			<div class="head">
              <div class="zhuce"><a href="#">ע��</a></div>
              <div class="xiexian">|</div>
              <div class="denglu"><a href="#">��¼</a></div>
      </div>
      <!--����-->
      <div class='content'>
              <div class="daohang">
                  <div class="shouye" align="center">
                    <a href="#">��վ��ҳ</a>
                    </div>
                    <div class="xinwendongtai" align="center">
                    <a href="#">���Ŷ�̬</a>
                    </div>
                    <div class="fanlizhanshi" align="center">
                    <a href="#">����չʾ</a>
                    </div>
                    <div class="PPTjiaocheng" align="center">
                    <a href="#">PPT�̳�</a>
                    </div>
                    <div class="wangyesucai" align="center">
                    <a href="#">��ҳ�ز�</a>
                    </div>
                    <div class="wangzhanhuodong" align="center">
                    <a href="#">��ҳ�</a>
                    </div>
                    <div class="lianxiwomen" align="center">
                    <a href="#">��ϵ����</a>
                    </div>
                </div>
                <!--flash-->
                <div class="flash">
                <img src="../images/flash.jpg"/>
                </div>
      </div>
            
