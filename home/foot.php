<div class="navbg2"> </div>
<div class="bottom">&copy;版权所有<?php echo date("Y") ?>　<?php echo $Global['m_sitename']; ?> (<?php echo $Global['m_siteurl']; ?>)<?php  /**/
$mtime = explode(' ', microtime());
$totaltime = number_format(($mtime[1] + $mtime[0] - $starttime), 6);
echo "<div align=center style=padding:3px;>".$totaltime." (s)</div>";
/**/?></div>
<?php if ( ereg("^[0-9]{1,9}$",$cook_userid) && !empty($cook_userid) ) {?>
<script charset="gb2312" language="javascript" src="<?php echo $Global['www_2domain']; ?>/ajax/wrzc_netPOP.js?t=<?php echo $Global['m_sitename']; ?>提醒您-&u=<?php echo $Global['www_2domain']; ?>&c=<?php echo $cook_nickname; ?>" id="wrzc_net2_1"></script>
<?php if ( $cook_grade == 2 || $cook_grade == 3 || $cook_grade == 10 ){?>
<script language="javascript" src="<?php echo $Global['www_2domain']; ?>/ajax/wrzc_net2PB.js?u=<?php echo $Global['my_2domain']; ?>" id="wrzc_net2_2"></script>
<?php }?>
<?php }?>
<script language="javascript" src="<?php echo $Global['www_2domain']; ?>/ajax/wrzc_net2ONLINE.js?u=<?php echo $Global['www_2domain']; ?>" id="wrzc_net2_3"></script>
<?php if (!empty($magic)) {?>
<script language=javascript src="set_magic.php?magicid=<?php echo $magic ?>"></script>
<?php }
if (!empty($bgmusic)) {?>
<embed style="FILTER:alpha(opacity=0,style=3);" src="<?php echo $bgmusic ?>" width="0" height="0" type="audio/mpeg" loop="0" autostart="true"></embed>
<?php }?>
</body>
</html>
<?php ob_end_flush();?>
