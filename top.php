<?php 
/*
 +--------------------------------+
+ 本程序原版权属于原作者
+ 修改日期：2014年9月10号 by allen == 联系starsw001@163.com
+ 如有修改，请保留本段信息，对您站没有影响
+--------------------------------+
*/
!function_exists('cdstr') && exit('Forbidden');$tmpnav = 'nav'.$navvar;$$tmpnav = $lst;?>
<div class=top_fav>
	<a onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('<?php echo $Global['www_2domain']; ?>');" href="javascript:">设为主页</a>
	- <a href="<?php echo $Global['www_2domain']; ?>" onclick="window.external.addFavorite(this.href,this.title);return false;" title='<?php echo $Global['m_sitename']; ?>' rel="sidebar">收藏</a><?php if (empty($cook_userid)){?>
	- <a href="<?php echo $Global['www_2domain']; ?>/login.php">登录</a><?php }?> 
	- <a href="<?php echo $Global['www_2domain']; ?>/reg.php">注册</a>
	- <a href="<?php echo $Global['www_2domain']; ?>/help">帮助</a>
</div>
<div class=top_nav>
	<div class=top_nav_left>
		<a href="<?php echo $Global['www_2domain']; ?>">
			<img src="<?php echo $Global['www_2domain']; ?>/images/logo.gif">
		</a>
	</div>
	<div class=top_nav_right>
		<ul>
			<li <?php echo $nav1; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>">首页</a>
			</li>
			<li <?php echo $nav2; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/user">征婚</a>
			</li>
			<li <?php echo $nav3; ?>>
				<a href="<?php echo $Global['group_2domain']; ?>">圈子</a>
			</li>
			<li <?php echo $nav4; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/clinic">诊所</a>
			</li>
			<li <?php echo $nav5; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/party">旅游</a>
			</li>
			<li <?php echo $nav6; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/dating">约会</a>
			</li>
			<!-- 
			<li <?php //echo $nav7; ?>>
				<a href="<?php //echo $Global['www_2domain']; ?>/user/online.php">聊天</a>
			</li>
			<li <?php //echo $nav8; ?>>
				<a href="<?php //echo $Global['www_2domain']; ?>/video">视频</a>
			</li>
			 -->
			<li <?php echo $nav9; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/diary">博客</a>
			</li>
			<li <?php echo $nav10; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/photo">相册</a>
			</li>
			<li <?php echo $nav11; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/user/search.php">搜索</a>
			</li>
			<li <?php echo $nav12; ?>>
				<a href="<?php echo $Global['www_2domain']; ?>/story">故事</a>
			</li>
		</ul>
	</div>
</div>
<div class="top_login">
	<div class="left_right">
		<img src="<?php echo $Global['www_2domain']; ?>/images/nav_l.gif" />
	</div>
	<div class="top_login_c"
		<?php if (!empty($cook_nickname))echo 'lineheight';?>>
<?php if (!empty($cook_nickname)) {?>	
		<a href="<?php echo $Global['home_2domain']; ?>/<?php echo $cook_userid;?>"	target=_blank class="uff0">“<?php echo $cook_nickname; ?>”</a>(<?php echo $cook_username; ?>)你好！
		<a href="<?php echo $Global['my_2domain']; ?>" class="nav">管理中心</a>
		<img src="<?php echo $Global['www_2domain']; ?>/images/top_login_cl.gif" align="absmiddle" />
		<a href="<?php echo $Global['my_2domain']; ?>/?b_gbook.php?submitok=list" class="nav">收件箱</a>
		<img src="<?php echo $Global['www_2domain']; ?>/images/top_login_cl.gif" align="absmiddle" />
		<a href="<?php echo $Global['my_2domain']; ?>/?a2.php" class="nav">修改资料</a>
		<img src="<?php echo $Global['www_2domain']; ?>/images/top_login_cl.gif" align="absmiddle" />
		<a href="<?php echo $Global['my_2domain']; ?>/?c_photo_up.php" class="nav">上传照片</a>
		<img src="<?php echo $Global['www_2domain']; ?>/images/top_login_cl.gif" align="absmiddle" />
		<a href="<?php echo $Global['my_2domain']; ?>/?k_vip.php" class="nav">会员升级</a>
		<img src="<?php echo $Global['www_2domain']; ?>/images/top_login_cl.gif" align="absmiddle" />
		<a href="<?php echo $Global['www_2domain']; ?>/exit.php" class="nav">安全退出</a>
<?php } else {?>
<script type="text/javascript">
function checkform(){
if(document.wrzc_netform.form_username.value==""){
	alert('请输入登录用户名！');
	document.wrzc_netform.form_username.focus();return false;}
if(document.wrzc_netform.form_username.value.length>12 || document.wrzc_netform.form_username.value.length<2){
	alert('用户名必须由3~12位组成。');
	document.wrzc_netform.form_username.focus();return false;}
if(document.wrzc_netform.form_password.value==""){
	alert('请输入密码！');
	document.wrzc_netform.form_password.focus();return false;
}}
</script>
		<form action="<?php echo $Global['www_2domain']; ?>/login.php" method="post" name="wrzc_netform" onsubmit="return checkform()">
			<div class="top_login_c_rows">
				<div class="top_login_c_rows1">用户名：</div>
				<div class="top_login_c_rows2">
					<input name="form_username" value="" type="text"	class=top_login_input />
				</div>
				<div class="top_login_c_rows3">密码：</div>
				<div class="top_login_c_rows4">
					<input name="form_password" value="" type="password" class=top_login_input />
				</div>
				<div class="top_login_c_rows5">
					<input name="stealth" type="checkbox" value="1" id=savepass />
				</div>
				<div class="top_login_c_rows6">
					<label for="savepass">隐身登录</label>
				</div>
				<div class="top_login_c_rows7">
					<input type="image" src=../images/login.gif />
				</div>
				<div class="top_login_c_rows8">
					<a href="<?php echo $Global['www_2domain']; ?>/reg.php"><img src="../images/reg.gif" border="0" /></a>
				</div>
				<div class="top_login_c_rows9">
					<a href="<?php echo $Global['www_2domain']; ?>/forgetpass.php">忘记密码？</a>
				</div>
			</div>
			<input type="hidden" name="submitok" value="checkuser" />
		</form>
<?php }?>
</div>
	<div class="left_right">
		<img src="<?php echo $Global['www_2domain']; ?>/images/nav_r.gif" />
	</div>
</div>
