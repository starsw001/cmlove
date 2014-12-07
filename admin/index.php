<?php
/*
 * +--------------------------------+ + 本后台程序版权属于本人所有 +--------------------------------+
 */
include_once ('session.php');
require_once ('../sub/init.php');
require_once ('../sub/conn.php');
$navvar = 1;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>后台管理</title>
</head>
<STYLE>
.navPoint {
	FONT-SIZE: 9pt;
	CURSOR: hand;
	COLOR: white;
	FONT-FAMILY: Webdings
}

body {
	font-size: 9pt;
}

td {
	font-size: 9pt;
	COLOR: white;
}
</STYLE>
<SCRIPT>   
function   switchSysBar() {   
if   (switchPoint.innerText==3){   
switchPoint.innerText=4   
document.all("frmTitle").style.display="none"   
} else {   
switchPoint.innerText=3   
document.all("frmTitle").style.display=""   
}   
}   
</SCRIPT>
</HEAD>
<BODY scroll=no bgProperties=fixed
	oncontextmenu=self.event.returnValue=false topmargin="0" leftmargin="0">
	<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
		<TR>
			<TD width="135" noWrap id=frmTitle name="frmTitle"
				style="border-right: #dddddd 2px solid;">
				<iframe width="135" height=100% name=menu scrolling=yes target=main
					src="left.php" frameborder=0 marginheight=0 marginwidth=0
					framespacing=0></iframe>
			</TD>
			<TD width="11" valign="middle" bgColor=#B13773
				style="WIDTH: 11px; cursor: hand:" onClick="switchSysBar()"
				title="关闭/打开左栏">
				<font color="#FFFFFF" style="CURSOR: hand;">收缩</font>
				<TABLE height="19" cellSpacing=0 cellPadding=0 border=0>
					<TR>
						<TD height="40" style="CURSOR: hand;">
							<SPAN class=navPoint id=switchPoint title=关闭/打开左栏>3</SPAN>
						</TD>
					</TR>
				</TABLE>
				<font color="#FFFFFF" style="CURSOR: hand;">展开</font>
			</TD>
			<TD style="border-left: #dddddd 2px solid;">
				<iframe name=mainframe src='welcome.php' width=100% height=100%
					scrolling=auto frameborder=no marginheight=0 marginwidth=0
					framespacing=0 style='padding-bottom: 5px;'></iframe>
			</TD>
		</TR>
	</TABLE>
	<noframes>
		<body>很遗憾，你的浏览器不支持框架。
		</body>
	</noframes>

</html>