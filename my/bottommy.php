<?php !function_exists('cdstr') && exit('Forbidden');?>
<p align=center style="color:#999;width:770px;height:50px;">

</p>
<script language="javascript" src="<?php echo $Global['www_2domain']; ?>/ajax/wrzc_netPOP.js?t=<?php echo $Global['m_sitename']; ?>лАпядЗ-&u=<?php echo $Global['www_2domain']; ?>&c=<?php echo $cook_nickname; ?>" id="wrzc_net2_1"></script>
<?php if ( $cook_grade == 2 || $cook_grade == 3 || $cook_grade == 10 ){?>
<script language="javascript" src="<?php echo $Global['www_2domain']; ?>/ajax/wrzc_net2PB.js?u=<?php echo $Global['my_2domain']; ?>" id="wrzc_net2_2"></script>
<?php }?>
<script language="javascript" src="<?php echo $Global['www_2domain']; ?>/ajax/wrzc_net2ONLINE.js?u=<?php echo $Global['www_2domain']; ?>" id="wrzc_net2_3"></script>
</body>
</html>
<?php ob_end_flush();?>