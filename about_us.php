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
	    <div class="line2">
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;相约同行网隶属于上海金旅国际旅行社有限公司<br />
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Global['m_sitename'];?>(<?php echo $Global['m_siteurl'] ?>)是首家以相亲、交友旅游为概念的大型交友旅游网站,
	    专为同城的单身男女白领提供相亲交友服务,免费发布约会促成同城交友,坚持诚信相亲，
	    所有交友信息都经过严格审核,为用户提供一个高品质的同城约会平台。找美女、帅哥约会,就来相约同行网站!
	    <br />
	    　　<?php echo $Global['m_sitename'] ?>(<?php echo $Global['m_siteurl'] ?>)与您相约今天,牵手未来;认认真真谈恋爱,实名认证相亲。实名认证、
	    匿名相亲、相亲更放心、成熟男女相亲，注册相约同行网，一起告别单身!专为单身人士相亲平台.火爆的异性相亲网站.同城寂寞男女相亲好选择,同城速配相亲.
	    <br />
	    　　<?php echo $Global['m_sitename'] ?>(<?php echo $Global['m_siteurl'] ?>)高端相亲网专为白领等高端精英人士提供婚介服务，交友的专业机构，VIP的一对一服务!
	    <br />
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;钱钟书先生在《围城》写：经过长期苦旅而彼此不讨厌的人,才可以结交作朋友。朋友如此，伴侣就更需要这样！旅行是检验一个人是否适合做伴侣的方式；
	    旅行是检验合适不合适的有效途径；世界很美丽，时间很短暂，抓住现实的精彩，开启精彩的美尔旅行生活吧！
		<br />
	  </div>
	</div>
	<div class="clear"></div>
</div>
<div class="main3"></div>
<?php require_once wrzc_net.'bottom.php';?>
