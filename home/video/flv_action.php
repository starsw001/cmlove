<?php
/*
+--------------------------------+

+--------------------------------+
*/
require_once '../../sub/init.php';
$fms_ip = $Global['m_siteurl'];
$weburl= $Global['home_2domain']."/video";
$user_id=1;
//以下部份请不要改动，否则会发生异常
$user_name = "wrzc_net";
if($_GET['action']=="get_user_id"){
	echo "fcs_host=".$fms_ip."&action_host=".$weburl."&end=1&copyright=www.wrzc.net,www.wygk.cn";
}
ob_end_flush();
?>