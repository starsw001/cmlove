<?php
require_once 'sub/init.php';$navvar=1;
require_once wrzc_net.'sub/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<style type="text/css"> 
.top_login .top_login_c .L,.top_login .top_login_c .R{float:left;height:41px;line-height:41px;color:#FFCCD9}
.top_login .top_login_c .L{width:320px;padding:0 0 0 80px;text-align:left}
.top_login .top_login_c .R{width:497px;padding:0 75px 0 0;text-align:right}
.top_login .top_login_c .R a{text-decoration:underline;color:#ff0;font-weight:bold}
.top_login .top_login_c .R a:hover{color:#cf0}
.main1 {width:922px;height:20px;margin:0px auto;margin-top:15px;background-image:url(images/login1.gif)}
.main2 {width:922px;margin:0px auto;background-image:url(images/login2.gif)}
.main2 .box{width:880px;margin:0px auto;background:#FFF5F9;border:#F7E4ED 1px solid}
.main2 .box .line1{width:880px;height:60px;line-height:60px;padding:20px 0 0 0;font-size:18px;font-family:黑体,宋体;color:#6F9F00}
.main2 .box .line2{width:680px;line-height:200%;text-align:left;padding:10px 100px 80px 100px;font-family:Verdana;font-size:14px}
.main3 {width:922px;height:20px;margin:0px auto;background-image:url(images/login3.gif);margin-bottom:20px}
</style>
</head>
<body>
<?php require_once wrzc_net.'top.php';?>
<div class="main1"></div>
<div class="main2">
	<div class="box">
		<div class="line1">关于<?php echo $Global['m_sitename']; ?></div>
	    <div class="line2">	    　　<?php echo $Global['m_sitename'] ?>(<?php echo $Global['m_siteurl'] ?>)由广州网软志成创建于2000年12月15日，是广州公益性实名制诚信婚恋交友的发起者和倡导者，如果你正在苦苦寻觅你的爱情，<?php echo $Global['m_sitename'] ?>也许是你最好的选择，通过填写资料、提交证件及拍摄照片等验证身份备案，以确保给大家一个真正实名制交友平台。以组织联谊活动、网络自助交友、心理咨询等四大服务模式服务广州。<br />
	    　　本站资料真实，全部采用人工审核制度，本地会员30多万，立足广州，面向广东，覆盖全国！提供征婚、婚介、速配、视频、约会、日记、聊天、相亲等交友服务，打破婚介交友传统方式，努力营造广州地区最专业的公益性实名制婚恋交友平台!<br />
	    　　交友有网络，爱情更精彩，广州网软志成祝愿大家早日找到心中的Ta！<br />
	    <br />
	  </div>
	</div>
	<div class="clear"></div>
</div>
<div class="main3"></div>
<?php require_once wrzc_net.'bottom.php';?>
