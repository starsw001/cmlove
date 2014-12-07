<?php
/*
+--------------------------------+

+--------------------------------+
*/
require_once '../../sub/init.php';
require_once wrzc_net.'sub/conn.php';
$fms_ip = $Global['m_siteurl'];
$weburl= $Global['home_2domain']."/v";
echo "<?xml version=\"1.0\" encoding=\"GB2312\" ?>\n";
echo "<xml>\n";
echo " <adlist>\n";
$rt=$db->query("SELECT * FROM ".__TBL_VIDEO__." ORDER BY id DESC LIMIT 15");
$total = $db->num_rows($rt);
if($total>0){
	for($i=1;$i<=$total;$i++) {
		$rows = $db->fetch_array($rt);
		if(!$rows) break;
		echo "  <ad Pic=\"".$Global['up_2domain']."/".$Global['m_flvpath']."/".$rows["path_s"]."\" FLVid=\"9161827\" Path=\"".$weburl."".$rows["id"].".html\" Title=\"".$rows["title"]."\" Star=\"3\" Click=\"".$rows["click"]."\" />\n";
	}
}
echo "  </adlist>\n";
echo "</xml>";
?>