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
		<div class="line1">安全须知</div>
	  <div class="line2">　　<?php echo $Global['m_sitename'] ?>(<?php echo $Global['m_siteurl'] ?>)提供了一个实名制的交友环境，让您有机会认识其它来自不同行业不同单位的单身男女。我们不敢保证会员所提供的资料有100%的真实性，请保持一定的警觉心，要有理智的判断能力，务必对自己的一切言行负责。不管是在虚拟亦或真实的世界里，防人之心不可无，这永远是保障您安全的金玉良言。<br />
	      <b>1.	步步为营</b><br />
	      　　刚开始最好是先使用站内留言单独联络，从中体会对方是否有任何怪异的言行举动或是前后矛盾的地方。对方的真面目或许跟其所形容的有很大的出入，因此请相信您自己的本能。一旦您感到任何不快，为了您的人身安全，请赶紧离开以保护自己的利益。 <br />
	      <b>2.	保护您的匿名身份 </b><br />
	      　　在您愿意将真实身份透露给TA人知道以前都是隐秘的。在您的个人档案里，或是给他人的第一封留言里，请不要公布您的姓氏、电子邮件、居住地址、电话号码、工作地点或任何跟个人身份有关的信息。并且如果对方为了想知道您个人信息而向您施加压力，或者有人意图使用欺骗的方式得知您的信息，请马上停止与其继续联系。 <br />
	      <b>3.	提高警惕心与锻炼判断力 </b><br />
	      　　请多加小心，深思熟虑后所做的决定通常会帮助您找到更好的情缘。在众多的追求者当中，只有率真、坦白、并且能够得到您信任的才是最佳人选。不管花多少时间都没有关系，重要的是您必须要花点心思，并且小心的试探那些您认为不可信任的人。当您怀疑对方在说谎时，也许您的直觉是对的，因此请根据情况做出适当的响应。对于自己所投入的恋情要有责任感，但是请不要太快地奉献出自己的真心。就算是在网络上，也最好不要将恋爱的过程进展的太快，就算是您决定要跨出这一步了，也请保持适当的警惕心来保护自己。 <br />
	      <b>4.	索取照片 </b><br />
	      　　通常通过一张照片可以让您大概了解对方的一般信息和长相，甚至可以加深对方在您心目中的印象。不过建议您多看一些不同场合的照片，例如对方正式场合的照片、日常生活、室外或室内照, 这样可以给自己多几个机会正确认识对方。<br />
	      <b>5.	打电话聊天 </b><br />
	      　　通过电话可以帮助您了解一个人的沟通以及社交能力。不过请多考虑一下自己的安全问题，千万不可轻易向陌生人吐露自己的家庭电话号码。您可以使用手机，或者通过座机的隐藏电话号码的特殊功能，以避免让对方知道您的号码。只有您真正信任的人，才可以将您的电话号码给对方！ <br />
	      <b>6.	见面？ 您准备好可以见面了吗？ </b><br />
	      　　网络交友最独特的地方就是您可以循序渐进地收集对方的信息，从而确定是否想要与对方在网络之外的现实世界延续感情。您可以自己选择是否与网友见面，并且与你们在网络上的亲密度毫无关系。<br />
	      <b>7.	小心！ 特别警告！ </b><br />
	      　　要是对方有动怒的倾向、让您感受到过度的热情或有挫败感、试图向您施压并企图控制您，这时请格外小心。另外，如果对方出现挑衅的举动、做出贬低或不尊重您的行为，以上所有粗俗的言行举止都被称之为特别警告。要是您与对方的约会过程中，发现以下任何一种无法合理解释的情况，都请您务必三思而后行：<br />
	      　　o	发现对方所提供的个人信息自相矛盾。<br />
	      　　o	在网络上已奠定了某种程度的亲密度但却拒绝跟您说话。<br />
	      　　o	无法直接回答简单明了的问题。<br />
	      　　o	与此人在网络上的表现有很明显的差异。<br />
	      　　o	从来不曾向您介绍他的朋友、同事或是家庭成员。 <br />
	      <b>8.	约会地点 </b><br />
	      　　如果您选择与对方在网络以外的地方见面，请记得告知亲友您出门的时间和大约将会返回的时间，并且留下对方的姓名和联系电话。出门时请自行前往约会地点，绝对不要接受或请求对方到您府上接送。约会的地点最好是公共场合，以及四周人较多的地方。选择一间自己比较熟悉的餐厅，并且挑一个客人较多的时间约会，这些都不失为一种安全的好方法。<br />
	      <b>9.	摆脱危险 </b><br />
	      　　绝对不要做自己没有把握的事情。在约会见面的过程当中，一旦发生让您感到害怕的事情，请发挥聪明才智帮自己化解困境，并尽速离开现场。当您感觉到自己有危险，请立即报警。个人安全总是最重要的，千万不要对自己的行为感到不好意思或尴尬，请记得，您的安全远比他人对您的评价更重要。 <br />
	      <br />
	      　　
	      后语:其实骗子或是冒名顶替之人不只会在网络上出现，他们往往在很多公共场合招摇撞骗，例如夜总会、舞厅、网络之外的约会服务，甚至有可能跟您坐在同一家的咖啡店里。无论您在哪里跟任何一个人约会见面，请记住，防人之心不可无。<br />
        <br />
	    <br />
	  </div>
	</div>
	<div class="clear"></div>
</div>
<div class="main3"></div>
<?php require_once wrzc_net.'bottom.php';?>
