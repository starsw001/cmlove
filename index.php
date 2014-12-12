<?php
/*
+--------------------------------+
+ 本程序原版权属于原作者
+ 修改日期：2014年9月10号 by allen == 联系starsw001@163.com
+ 如有修改，请保留本段信息，对您站没有影响
+--------------------------------+
*/
require_once 'sub/init.php';
$navvar = 1;
require_once wrzc_net . 'sub/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="<?php echo $Global['m_keywords']; ?>" />
<meta name="description" content="<?php echo $Global['m_description']; ?>" />
<title><?php echo $Global['m_sitetitle']; ?></title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/index.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="ajax/wrzc_netXML.js"></script>
<script language="javascript" src="adv/wrzc_netAdswf.js"></script>
<script language="javascript" src="adv/indexAD.js"></script>
</head>
<body>
<?php require_once wrzc_net.'top.php';?>
<!-- 第一方正 -->
	<div class="main1">
		<div class="left">
			<div class="advsearch">
				<div class="adv">
					<span id="wrzc_net_wrzc_net_FAD"></span>
					<script type="text/javascript">
wrzc_netAd('wrzc_net_wrzc_net_FAD',focus_ly,focus_width,swf_height,pics,links,texts);
</script>
				</div>
				<div class="search">
					<form method=get action="user/searchlist.php" name=wrzc_net>
						<div class="sli1">
							<select name="sex" class=selw>
								<option value="2">找女朋友</option>
								<option value="1">找男朋友</option>
								<option value="">男女不限</option>
							</select>
							<select name="kind" class=selw>
								<option value="">不限</option>
								<option value="1">都可以</option>
								<option value="2">约会交友</option>
								<option value="3" selected="selected">婚姻恋爱</option>
								<option value="4">红尘知已</option>
								<option value="5">以商会友</option>
							</select>
							<select name="birthday1" class=selwx>
								<option value="">不限</option><?php for($i=18;$i<=70;$i++) {?><option
									value="<?php echo $i; ?>"
									<?php if ($i == 22)echo 'selected'; ?>><?php echo $i; ?> 岁</option><?php }?></select>
							到
							<select name="birthday2" class=selwx>
								<option value="">不限</option><?php for($i=18;$i<=70;$i++) {?><option
									value="<?php echo $i;?>" <?php if ($i == 40)echo 'selected'; ?>><?php echo $i; ?> 岁</option><?php }?>
</select>
						</div>
						<div class="sli2">
							<img src="images/zoomx.gif" hspace="4" align="absmiddle" />
							<a href="user/search.php">高级搜索</a>
						</div>
						<div class="sli1">
							<select name="province" class=selw>
								<option value="" selected="selected">地区不限</option>
								<option value=安徽>安徽</option>
								<option value=北京>北京</option>
								<option value=重庆>重庆</option>
								<option value=福建>福建</option>
								<option value=甘肃>甘肃</option>
								<option value=广东>广东</option>
								<option value=广西>广西</option>
								<option value=贵州>贵州</option>
								<option value=海南>海南</option>
								<option value=河北>河北</option>
								<option value=黑龙江>黑龙江</option>
								<option value=河南>河南</option>
								<option value=香港>香港</option>
								<option value=湖北>湖北</option>
								<option value=湖南>湖南</option>
								<option value=江苏>江苏</option>
								<option value=江西>江西</option>
								<option value=吉林>吉林</option>
								<option value=辽宁>辽宁</option>
								<option value=澳门>澳门</option>
								<option value=内蒙古>内蒙古</option>
								<option value=宁夏>宁夏</option>
								<option value=青海>青海</option>
								<option value=山东>山东</option>
								<option value=上海>上海</option>
								<option value=山西>山西</option>
								<option value=陕西>陕西</option>
								<option value=四川>四川</option>
								<option value=台湾>台湾</option>
								<option value=天津>天津</option>
								<option value=新疆>新疆</option>
								<option value=西藏>西藏</option>
								<option value=云南>云南</option>
								<option value=浙江>浙江</option>
								<option value=海外>海外</option>
							</select>
							<input name="photo" type="checkbox" value="1" checked="checked"
								id="ifphoto" />
							<label for="ifphoto">有照片</label>
							<input name="video" type="checkbox" value="1" id="ifvideo" />
							<label for="ifvideo">有视频</label>
							<input name="s" type="checkbox" id="sgrade" value="2"
								checked="checked" />
							<label for="sgrade">高级会员优先</label>
						</div>
						<div class="sli2">
							<input type="image" src="images/so.gif">
						
						</div>
						<div class="clear"></div>
					</form>
				</div>
			</div>
			<div class="ask">
				<div class="title">
					<a
						href="<?php echo $Global['my_2domain'];?>/?h_ask.php?submitok=add"
						class="ub9_800040">发布</a>
					<a href="clinic" class="ub9_800040">更多</a>
				</div>
<?php
$rt = $db->query ( "SELECT id,title,ifopen FROM " . __TBL_ASK__ . " WHERE flag>0 AND ifjh=1 ORDER BY id DESC LIMIT 8" );
if (! $db->num_rows ( $rt )) {
	echo '<h6>暂无信息</h6>';
} else {
	$rows = $db->fetch_array ( $rt );
	$id = $rows [0];
	$title = badstr ( $rows [1] );
	$ifopen = $rows [2];
	if ($ifopen == 0) {
		$href = "clinic/detail$id.html";
	} else {
		$href = $Global ['home_2domain'] . "/ask$id.html";
	}
	?>
<div class="jh">
					<h4>
						<a href="<?php echo $href;?>" target="_blank"><?php echo $title; ?></a>
					</h4>
				</div>
				<ul>
<?php
	$total = $db->num_rows ( $rt );
	for($i = 1; $i < $total; $i ++) {
		$rows = $db->fetch_array ( $rt );
		if (! $rows)
			break;
		if ($i % 2 == 0 && $i != $total) {
			$liclass = ' class=libg';
		} else {
			$liclass = '';
		}
		$id = $rows [0];
		$title = badstr ( $rows [1] );
		$ifopen = $rows [2];
		if ($ifopen == 0) {
			$href = "clinic/detail$id.html";
		} else {
			$href = $Global ['home_2domain'] . "/ask$id.html";
		}
		echo "<li$liclass>·<a href=$href target=_blank>" . $rows [1] . "</a></li>";
	}
	?>
</ul>
<?php }?>
</div>
		</div>
		<div class="right">
			<div class="partyT">
				<div class="partyT0 partyTWH" id="p1" onmouseover="doparty(this)">
					<a href="party">交友旅游</a>
				</div>
				<div class="partyT0 partyTWH" id="p2" onmouseover="doparty(this)">
					<a href="dating">约会1+1</a>
				</div>
				<div class="partyT0 partyTWH" id="p3" onmouseover="doparty(this)">
					<a href="user/searchlist.php?t=2">最新会员</a>
				</div>
				<div class="partyT0 partyTWH" id="p4" onmouseover="doparty(this)"
					style="margin: 0">
					<a href="news.php">本站公告</a>
				</div>
			</div>
			<div class="partyC">
				<div id="pp1">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
				<div id="pp2">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
				<div id="pp3">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
				<div id="pp4">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
<?php

echo "<script type='text/javascript'>";
$rt = $db->query ( "SELECT id FROM " . __TBL_GROUP_CLUB__ . " WHERE flag=1 LIMIT 1" );
$ifP = (! $db->num_rows ( $rt )) ? 0 : 1;
// $ifP = 1;
if ($ifP == 1) {
	echo "pppt = getObj('p1');";
	echo "pppc = getObj('pp1');";
	echo "pppt.className = 'partyT1 partyTWH';";
	echo "pppc.style.display = 'block';";
	echo "getData('pp1');";
} else {
	echo "pppt = getObj('p4');";
	echo "pppc = getObj('pp4');";
	echo "pppt.className = 'partyT1 partyTWH';";
	echo "pppc.style.display = 'block';";
	echo "getData('pp4');";
}
echo "</script>";
?>
</div>
		</div>
	</div>
	<br style="line-height: 0" />
	<!-- 第2方正 -->
	<div class="main2">
		<div class="left">
			<div class="title">
				<div class="userJJT1" id="u1" onmouseover="doindexuser(this)"
					title="点击查看更多交友目的为“婚姻恋爱”的会员">
					<a href=user target=_blank>征婚榜</a>
				</div>
				<div class="nbsp10"></div>
				<div class="userJJ0" id="u2" onmouseover="doindexuser(this)"
					title="点击查看更多交友目的为“约会交友”的会员">
					<a href=user/?k=2 target=_blank>约会交友</a>
				</div>
				<div class="userJJ0" id="u3" onmouseover="doindexuser(this)"
					title="点击查看更多交友目的为“红尘知己”的会员">
					<a href=user/?k=4 target=_blank>红尘知己</a>
				</div>
				<div class="userJJ0" id="u4" onmouseover="doindexuser(this)"
					title="点击查看更多交友目的为“以商会友”的会员">
					<a href=user/?k=5 target=_blank>以商会友</a>
				</div>
				<div class="userJJ0" id="u5" onmouseover="doindexuser(this)"
					title="点击查看更多交友目的为“都可以”的会员" style="letter-spacing: 4px">
					<a href=user/?k=1 target=_blank>都可以</a>
				</div>
				<div class="nbsp116"></div>
				<div class="userJJ0">
					<span>+ </span>
					<a href=user>更多会员</a>
				</div>
				<div class="rj">
					<img src="images/main2_rj.gif" />
				</div>
			</div>
			<div class="content">
				<div class="uu" id="uu1">
					<div class="sexselect">
						<div class="wrzc_net1">
							<a href="user/?k=3&s=4">
								<img src="images/wrzc_net1.gif" title="显示更多女士征婚" border="0" />
							</a>
							<a href="user/?k=3&s=3">
								<img src="images/wrzc_net2.gif" title="显示更多男士征婚" border="0" />
							</a>
						</div>
						<div class="wrzc_net2">
							( 只显示有照片会员 )
							<a href="<?php echo $Global['my_2domain'].'/?k_bidding.php'; ?>">我也要在这里显示</a>
						</div>
					</div>
				<?php
				$sexxx = ($cook_sex == 1 || empty ( $cook_sex )) ? " AND sex=2 " : " AND sex=1 ";
				$Tfield = "id,nickname,grade,sex,birthday,love,kind,area1,area2,photo_s,video_s,heigh,weigh,house,car,edu,job,pay,ifphoto,ifbirthday,ifedu,iflove,ifpay,zhenghun_jingjia ";
				$tmpsql = "SELECT $Tfield FROM " . __TBL_MAIN__ . " WHERE kind=3 AND flag=1 AND photo_s<>'' $sexxx ORDER BY zhenghun_jingjia DESC,logintime DESC LIMIT 6";
				$rt = $db->query ( $tmpsql );
				if (! $db->num_rows ( $rt )) {
					echo '<h6>暂无信息</h6>';
				} else {
					require_once wrzc_net . 'sub/fundata.php';
					$data = new wrzc_net_data ();
					$total = $db->num_rows ( $rt );
					for($i = 1; $i <= $total; $i ++) {
						$rows = $db->fetch_array ( $rt );
						if (! $rows)
							break;
						$uid = $rows ['id'];
						$id = $uid * 7 + 8848;
						$nickname = $rows ['nickname'];
						$grade = $rows ['grade'];
						$sex = $rows ['sex'];
						$birthday = $rows ['birthday'];
						$love = $rows ['love'];
						$kind = $rows ['kind'];
						$area1 = $rows ['area1'];
						$area2 = $rows ['area2'];
						$photo_s = $rows ['photo_s'];
						$video_s = $rows ['video_s'];
						$heigh = $rows ['heigh'];
						$weigh = $rows ['weigh'];
						$house = $rows ['house'];
						$car = $rows ['car'];
						$edu = $rows ['edu'];
						$job = $rows ['job'];
						$pay = $rows ['pay'];
						$ifphoto = $rows ['ifphoto'];
						$ifbirthday = $rows ['ifbirthday'];
						$ifedu = $rows ['ifedu'];
						$iflove = $rows ['iflove'];
						$ifpay = $rows ['ifpay'];
						$zhenghun_jingjia = $rows ['zhenghun_jingjia'];
						$tmpx = 0;
						if ($ifphoto == 1)
							$tmpx = $tmpx + 1;
						if ($ifbirthday == 1)
							$tmpx = $tmpx + 1;
						if ($ifedu == 1)
							$tmpx = $tmpx + 1;
						if ($iflove == 1)
							$tmpx = $tmpx + 1;
						if ($ifpay == 1)
							$tmpx = $tmpx + 1;
						if ($zhenghun_jingjia > 0) {
							$href = 'bidderuser' . $id . '.html';
						} else {
							$href = $Global ['home_2domain'] . '/' . $uid;
						}
						?>
				<div class="frame">
						<div class="L">
							<a href=<?php echo $href; ?> target=_blank>
								<?php if (empty($photo_s)){?>
								<img src="<?php echo $Global['www_2domain'];?>/images/nopic<?php echo $sex; ?>.gif" title="暂无照片">
								<?php } else {?>
								<img src="<?php echo $Global['up_2domain'];?>/photo/<?php echo $photo_s;?>" title="<?php echo $nickname.'的照片'; ?>">
								<?php }?>
							</a>
						</div>
						<div class="R">
							<div class="top">
							<?php
							geticon ( $sex . $grade );
						echo '<a href=' . $href . ' target=_blank>' . badstr ( $nickname ) . '</a>';
						if ($tmpx > 0) {
							echo ' ( ';
							echo '<a href=' . $Global ['my_2domain'] . '/?k_sfz.php>';
							for($x2 = 1; $x2 <= $tmpx; $x2 ++) {
								echo "<image src=images/sfz_x.gif align=absmiddle vspace=5 title='实名认证星级：当前" . $tmpx . "星，共5星'>";
							}
							echo '</a>';
							if ($tmpx > 0)
								echo ' )';
						}
						?></div>
							<div class="middle"><?php echo $data->getbirthday($birthday); ?>，<?php echo $data->getlove($love); ?>，<?php if ($heigh > 140)echo $heigh.'厘米，';?><?php if ($weigh > 20)echo $weigh.'公斤，'; ?><?php echo $area1.$area2; ?>，<?php $tmphouse = $data->gethouse($house);if (!empty($tmphouse))echo $tmphouse.'，'; ?><?php $tmpcar = $data->getcar($car);if (!empty($tmpcar))echo $tmpcar.'，'; ?><?php $tmpedu = $data->getedu($edu);if (!empty($tmpedu))echo $tmpedu.'，'; ?><?php $tmppay = $data->getpay($pay);if (!empty($tmppay))echo $tmppay.'，'; ?><?php $tmpjob = $data->getjob($job);if (!empty($tmpjob))echo $tmpjob.'，'; ?>交友目的为<?php echo $data->getkind($kind);?></div>
							<div class="bottom">
								+
								<a href=<?php echo $href;?> target=_blank>查看详细</a>
							</div>
						</div>
					</div>
				<?php }?>
				<?php }?>
			</div>
				<div class="uu" id="uu2">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
				<div class="uu" id="uu3">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
				<div class="uu" id="uu4">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
				<div class="uu" id="uu5">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
			</div>
		</div>
		<div class="right">
<<<<<<< HEAD
		<!-- 广告
=======
		<!-- 
>>>>>>> origin/master
			<div class="adv">
				<span id="AD1"></span>
				<script language="JavaScript">wrzc_net_getbyid('AD1').innerHTML = AD1;</script>
			</div>
<<<<<<< HEAD
			 -->
=======
		 -->	
>>>>>>> origin/master
			<div class="diaryT">
				<div class="diaryT1 diaryTWH" id="d1" onmouseover="dodiary(this)">
					<a href="diary">最新日记</a>
				</div>
				<div class="diaryT0 diaryTWH" id="d2" onmouseover="dodiary(this)">
					<a href="diary/?t=1">精品日记</a>
				</div>
				<div class="diaryT0 diaryTWH" id="d3" onmouseover="dodiary(this)"
					title="最近一个月按回复排序">
					<a href="diary/?t=2">焦点日记</a>
				</div>
				<div class="diaryT0 diaryTWH" id="d4" onmouseover="dodiary(this)"
					style="margin: 0" title="最近一个月按人气排序">
					<a href="diary/?t=3">热点日记</a>
				</div>
			</div>
			<div class="diaryC">
				<div class="dd" id="dd1">
				<?php
				$rt = $db->query ( "SELECT id,title,addtime FROM " . __TBL_DIARY__ . " WHERE flag=1 AND diaryopen=1 ORDER BY id DESC LIMIT 9" );
				if (! $db->num_rows ( $rt )) {
					echo '<h6>暂无信息</h6>';
				} else {
					$total = $db->num_rows ( $rt );
					for($i = 1; $i <= $total; $i ++) {
						$rows = $db->fetch_array ( $rt );
						if (! $rows)
							break;
						?>
				<div class="li1">
						<img src="images/lid.gif" />
						<a
							href=<?php echo $Global['home_2domain'].'/diary'.$rows[0].'.html'; ?>
							target=_blank
							title="<?php echo badstr(htmlout(stripslashes($rows[1]))); ?>"><?php echo gylsubstr(badstr(htmlout(stripslashes($rows[1]))),32); ?></a>
					</div>
					<div class="li2"><?php echo date_format2($rows[2],'%Y-%m-%d');?></div>
				<?php }}?>
			</div>
				<div class="dd" id="dd2">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
				<div class="dd" id="dd3">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
				<div class="dd" id="dd4">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
			</div>
			<div class="diaryB">
				<div class="box">
					<a href="my/?f_diary.php?submitok=list">我的日记</a>
					|
					<a href="my/?f_diary.php?submitok=add">我要发表</a>
					|
					<a href="diary">查看更多</a>
				</div>
			</div>
			<div class="adv2">
				<span id="AD2"></span>
				<script language="JavaScript">wrzc_net_getbyid('AD2').innerHTML = AD2;</script>
			</div>
		</div>
	</div>
	<!-- 第3方正 -->
	<div class="main3">
		<div class="left">
			<div class="title">
				<div class="groupJJT1" id="g1" onmouseover="doindexgrpup(this)">
					<a href=<?php echo $Global['group_2domain'].'/grouplist.php'; ?>
						target=_blank>圈子榜</a>
				</div>
				<div class="nbsp10"></div>
				<div class="groupJJ0" id="g2" onmouseover="doindexgrpup(this)">
					<a
						href=<?php echo $Global['group_2domain'].'/grouplist.php?t=2'; ?>
						target=_blank>最新创建</a>
				</div>
				<div class="groupJJ0" id="g3" onmouseover="doindexgrpup(this)">
					<a
						href=<?php echo $Global['group_2domain'].'/grouplist.php?t=3'; ?>
						target=_blank>成员最多</a>
				</div>
				<div class="groupJJ0" id="g4" onmouseover="doindexgrpup(this)">
					<a
						href=<?php echo $Global['group_2domain'].'/grouplist.php?t=4'; ?>
						target=_blank>帖子排行</a>
				</div>
				<div class="groupJJ0" id="g5" onmouseover="doindexgrpup(this)">
					<a
						href=<?php echo $Global['group_2domain'].'/grouplist.php?t=5'; ?>
						target=_blank>人气排行</a>
				</div>
				<div class="nbsp116"></div>
				<div class="groupJJ0">
					<span>+ </span>
					<a href=<?php echo $Global['group_2domain']; ?>>更多圈子</a>
				</div>
				<div class="rj">
					<img src="images/main2_rj.gif" />
				</div>
			</div>
			<div class="content">
				<div class="gg" id="gg1">
<?php
// $rt=$db->query("SELECT id,title,qgrade,allusrnum FROM ".__TBL_GROUP_MAIN__." WHERE flag=1 AND jjpmprice>0 AND qloveb>0 ORDER BY jjpmprice DESC,id DESC LIMIT 15");
$rt = $db->query ( "SELECT id,title,qgrade,allusrnum FROM " . __TBL_GROUP_MAIN__ . " WHERE flag=1 ORDER BY jjpmprice DESC,id DESC LIMIT 15" );
if (! $db->num_rows ( $rt )) {
	echo '<h6>暂无信息</h6>';
} else {
	$total = $db->num_rows ( $rt );
	for($i = 1; $i <= $total; $i ++) {
		$rows = $db->fetch_array ( $rt );
		if (! $rows)
			break;
		$mainid = $rows [0] * 7 + 8848;
		?>
<li>
						<img src="images/groupico.gif" align="absmiddle" />
						<a href=<?php echo 'biddergroup'.$mainid.'.html'; ?> target=_blank
							<?php if ($rows[2] > 3)echo ' class=grade';?>><?php echo $rows[1]; ?></a>
						(
						<span><?php echo $rows[3]; ?></span>
						人)
					</li>
<?php }}?>
</div>
				<div class="gg" id="gg2">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
				<div class="gg" id="gg3">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
				<div class="gg" id="gg4">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
				<div class="gg" id="gg5">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
				<ul>
					<li>
						<span id="AD4"></span>
						<script language="JavaScript">wrzc_net_getbyid('AD4').innerHTML = AD4;</script>
					</li>
					<li>
						<span id="AD5"></span>
						<script language="JavaScript">wrzc_net_getbyid('AD5').innerHTML = AD5;</script>
					</li>
					<li>
						<span id="AD6"></span>
						<script language="JavaScript">wrzc_net_getbyid('AD6').innerHTML = AD6;</script>
					</li>
					<li>
						<span id="AD7"></span>
						<script language="JavaScript">wrzc_net_getbyid('AD7').innerHTML = AD7;</script>
					</li>
					<li>
						<span id="AD8"></span>
						<script language="JavaScript">wrzc_net_getbyid('AD8').innerHTML = AD8;</script>
					</li>
				</ul>
				<div class="clear"></div>
				<div class="wzbox wzbox1"></div>
				<div class="wzbox wzbox2">
					<div class="wzT">
						<div class="wzTl">
							<img src="images/group_t_d.gif" />
						</div>
						<div class="wzTm">最新话题</div>
						<div class="wzTr">
							<a
								href=<?php echo $Global['group_2domain'].'/articlelist.php?t=2'; ?>
								target="_blank">
								<img src="images/group_t_more.gif" border="0" />
							</a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="wzC"><?php
					$rt = $db->query ( "SELECT id,title,addtime FROM " . __TBL_GROUP_WZ__ . " WHERE flag=1 ORDER BY id DESC LIMIT 5" );
					if (! $db->num_rows ( $rt )) {
						echo '<h6>暂无信息</h6>';
					} else {
						$total = $db->num_rows ( $rt );
						for($i = 1; $i <= $total; $i ++) {
							$rows = $db->fetch_array ( $rt );
							if (! $rows)
								break;
							?>
<div class="wzli1">
							<a
								href=<?php echo $Global['group_2domain'].'/read'.$rows[0].'.html'; ?>
								target=_blank><?php echo badstr(htmlout(stripslashes($rows[1]))); ?></a>
						</div>
						<div class="wzli2"><?php echo date_format2($rows[2],'%Y-%m-%d');?></div>
<?php }}?>

</div>
				</div>
				<div class="wzbox wzbox3"></div>
				<div class="wzbox wzbox4">
					<div class="wzT">
						<div class="wzTl">
							<img src="images/group_t_d.gif" />
						</div>
						<div class="wzTm">推荐话题</div>
						<div class="wzTr">
							<a
								href=<?php echo $Global['group_2domain'].'/articlelist.php'; ?>
								target="_blank">
								<img src="images/group_t_more.gif" border="0" />
							</a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="wzC">
<?php
$rt = $db->query ( "SELECT id,title,userid,nicknamesexgradephoto_s FROM " . __TBL_GROUP_WZ__ . " WHERE flag=1 AND ifjh=1 ORDER BY id DESC LIMIT 5" );
if (! $db->num_rows ( $rt )) {
	echo '<h6>暂无信息</h6>';
} else {
	$total = $db->num_rows ( $rt );
	for($i = 1; $i <= $total; $i ++) {
		$rows = $db->fetch_array ( $rt );
		if (! $rows)
			break;
		$tmpnickname = explode ( "|", $rows ['nicknamesexgradephoto_s'] );
		$sexcolor = $tmpnickname [1];
		if ($sexcolor == 1) {
			$sexcolor = ' class=lan';
		} else {
			$sexcolor = ' class=hong';
		}
		?>
<div class="wzli3">
							<a
								href=<?php echo $Global['group_2domain'].'/read'.$rows[0].'.html'; ?>
								target=_blank><?php echo gylsubstr(badstr(htmlout(stripslashes($rows[1]))),34); ?></a> |<?php
		
		echo "<a href=" . $Global ['home_2domain'] . "/" . $rows [2] . " target=_blank><span$sexcolor>" . $tmpnickname [0] . "</span></a>";
		?>
</div>
<?php }}?>
</div>
				</div>
				<div class="wzbox wzbox3"></div>
			</div>
		</div>
		<div class="right">
			<div class="storyT">
				<div class="storyT1 storyTWH" id="s1" onmouseover="dostory(this)">
					<a href="story">成功故事</a>
				</div>
				<div class="storyT0 storyTWH" id="s2" onmouseover="dostory(this)">
					<a href="news.php?kind=2">恋爱宝典</a>
				</div>
				<div class="storyT0 storyTWH" id="s3" onmouseover="dostory(this)">
					<a href="news.php?kind=3">婚姻法规</a>
				</div>
				<div class="storyT0 storyTWH" id="s4" onmouseover="dostory(this)"
					style="margin: 0">
					<a href="help">联系客服</a>
				</div>
			</div>
			<div class="storyC">
				<div class="ss" id="ss1">
<?php
$rt = $db->query ( "SELECT id,title,bbsnum FROM " . __TBL_STORY__ . " WHERE flag=1 ORDER BY ifjh DESC,id DESC LIMIT 8" );
if (! $db->num_rows ( $rt )) {
	echo '<h6>暂无信息</h6>';
} else {
	$total = $db->num_rows ( $rt );
	for($i = 1; $i <= $total; $i ++) {
		$rows = $db->fetch_array ( $rt );
		if (! $rows)
			break;
		$storyid = $rows [0];
		$title = $rows [1];
		$bbsnum = $rows [2];
		?>
<div class="li1">
						<img src="images/storyX.gif" hspace="3" />
						<a href=<?php echo'story/detail'.$storyid.'.html'; ?>
							target=_blank><?php echo stripslashes($title); ?></a>
					</div>
					<div class="li2" title="共收到网友的祝福">
						<span><?php echo $bbsnum; ?></span>
						个祝福
					</div>
<?php }}?>
</div>
				<div class="ss" id="ss2">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
				<div class="ss" id="ss3">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
				<div class="ss" id="ss4">
					<h6>
						<img src="images/loading.gif" />
						Loading...
					</h6>
				</div>
			</div>
			<div class="storyB">
				<div class="box">
					<a href="my/?g_story.php?submitok=list">我的故事</a>
					|
					<a href="my/?g_story.php?submitok=add">上传故事</a>
					|
					<a href="story">更多故事</a>
				</div>
			</div>
			<div class="adv">
				<span id="AD3"></span>
				<script language="JavaScript">wrzc_net_getbyid('AD3').innerHTML = AD3;</script>
			</div>

		</div>
	</div>
	<!-- 第4方正 -->
	<div class="main4">
		<div class="left">
			<div class="title">
				<div class="t1">
					<img src="images/main4_lj.gif" />
				</div>
				<div class="t2">
					<a href="user/searchlist.php?t=2">最新会员</a>
				</div>
				<div class="t3">
					<span>+ </span>
					<a href="user/searchlist.php?t=2">更多会员</a>
				</div>
				<div class="t4">
					<img src="images/main4_rj.gif" />
				</div>
			</div>
			<div class="content">
	<?php
	$sexxx = ($cook_sex == 1 || empty ( $cook_sex )) ? " AND sex=2 " : " AND sex=1 ";
	$Tfield = "id,nickname,grade,sex,birthday,love,kind,area1,area2,photo_s,video_s,heigh,weigh,house,car,edu,job,pay,ifphoto,ifbirthday,ifedu,iflove,ifpay,zhenghun_jingjia ";
	$tmpsql = "SELECT $Tfield FROM " . __TBL_MAIN__ . " WHERE   flag=1 ORDER BY id DESC LIMIT 5";
	$rt = $db->query ( $tmpsql );
	if (! $db->num_rows ( $rt )) {
		echo '<h6>暂无信息</h6>';
	} else {
		require_once wrzc_net . 'sub/fundata.php';
		$data = new wrzc_net_data ();
		$total = $db->num_rows ( $rt );
		for($i = 1; $i <= $total; $i ++) {
			$rows = $db->fetch_array ( $rt );
			if (! $rows)
				break;
			$uid = $rows['id'];
						$id = $uid*7+8848;
						$nickname = $rows['nickname'];
						$grade = $rows['grade'];
						$sex = $rows['sex'];
						$birthday = $rows['birthday'];
						$love = $rows['love'];
						$kind = $rows['kind'];
						$area1 = $rows['area1'];
						$area2 = $rows['area2'];
						$photo_s = $rows['photo_s'];
						$video_s = $rows['video_s'];
						$heigh = $rows['heigh'];
						$weigh = $rows['weigh'];
						$house = $rows['house'];
						$car = $rows['car'];
						$edu = $rows['edu'];
						$job = $rows['job'];
						$pay = $rows['pay'];
						$ifphoto = $rows['ifphoto'];
						$ifbirthday = $rows['ifbirthday'];
						$ifedu = $rows['ifedu'];
						$iflove = $rows['iflove'];
						$ifpay = $rows['ifpay'];
						$zhenghun_jingjia = $rows['zhenghun_jingjia'];
						$tmpx = 0;
						if ($ifphoto == 1)$tmpx = $tmpx+1;
						if ($ifbirthday == 1)$tmpx = $tmpx+1;
						if ($ifedu == 1)$tmpx = $tmpx+1;
						if ($iflove == 1)$tmpx = $tmpx+1;
						if ($ifpay == 1)$tmpx = $tmpx+1;
						if ($zhenghun_jingjia > 0){
							$href = 'bidderuser'.$id.'.html';
						} else {
							$href = $Global['home_2domain'].'/'.$uid;
						}
				?>
<div class="box">
					<div class="C">
						<a href=<?php echo $href; ?> target=_blank><?php if (empty($photo_s)){?><img
								src=<?php echo $Global['www_2domain'];?> /images/nopic
								<?php echo $sex; ?>.gif title="暂无照片"><?php } else {?><img
									src=<?php echo $Global['up_2domain'];?>
									/photo/<?php echo $photo_s; ?>
									title="<?php echo $nickname.'的照片'; ?>"><?php }?>
						
						</a>
					</div>
					<div class="T"><?php geticon($sex.$grade);echo '<a href='.$href.' target=_blank>'.badstr($nickname).'</a>';
if ($tmpx > 0){echo ' ( ';
echo '<a href='.$Global['my_2domain'].'/?k_sfz.php>';
for($x2=1;$x2<=$tmpx;$x2++) {
	echo "<image src=images/sfz_x.gif align=absmiddle vspace=5 title='实名认证星级：当前".$tmpx."星，共5星'>";
}echo '</a>';if ($tmpx > 0)echo ' )';}
?></div>
				</div>
<?php }}?>
</div>
		</div>
		<div class="right">
			<div class="onlineT">
				<div class="onlineT1 onlineTWH">
					<a href="user/online.php">在线之星</a>
				</div>
				<div class="onlineT0 onlineTWH">
					<a href="user/online.php">查看更多</a>
				</div>
				<div class="onlineTWH num">
					当前在线
					<a href="user/online.php" title="含游客和隐身会员，点击查看全部在线会员">
<?php 
require_once wrzc_net.'sub/online.php';
$online = new online_wrzc_net;
$online->chk();
$online->num();
?></a>
					人
				</div>
			</div>
			<div class="onlineC">
				<div class="C">
<?php 
$rt=$db->query("SELECT a.userid,b.username,b.sex FROM ".__TBL_ONLINE__." a,".__TBL_MAIN__." b WHERE a.rnd=0 AND a.userid=b.id ORDER BY a.actiontime DESC LIMIT 20");
$total = $db->num_rows($rt);
if($total>0){
for($i=1;$i<=$total;$i++) {
$rows = $db->fetch_array($rt);
if(!$rows) break;
$sexcolor = $rows[2];
if ($sexcolor == 1){$sexcolor=' class=lan';}else{$sexcolor=' class=hong';}
?>
<a href=<?php echo $Global['home_2domain'];?> /<?php echo $rows[0];?>
						<?php echo $sexcolor; ?> target=_blank><?php echo stripslashes($rows[1]);?></a> <?php if ($i != $total)echo '|'; ?> 
<?php }}?>
</div>
			</div>
		</div>
	</div>
<?php require_once wrzc_net.'links.html';?>
<?php require_once wrzc_net.'bottom.php';?>