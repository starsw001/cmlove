<?php
require_once "sub/init.php";
require_once wrzc_net.'sub/conn.php';
require_once wrzc_net."sub/online.php";
$online = new online_wrzc_net;
$online->chk();
ob_end_flush();
?>