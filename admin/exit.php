<?php
/*
+--------------------------------+
+ 本后台程序版权属于本人所有
+ Author：网软志成www.wrzc.net，QQ：38306293
+ 本文件最后修改日期：2012年1月
+ 如有修改，请保留本段信息，对您站没有影响
+--------------------------------+
*/
session_start();
require_once '../sub/init.php';
require_once '../sub/conn.php';
require_once '../sub/fun.php';

      //先销毁变量,再销毁自己 ;
        session_start();   
        session_unset();  
	    session_unset('adminpass');
	    session_unset('adminname');
    	session_destroy(); 
	    echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php\">";
?>