<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link href="my.css" rel="stylesheet" type="text/css">
<style type="text/css"> 
ul {width:754px;height:28px;margin-left:28px;margin-top:15px;background-image:url(images/sontgg.gif);padding-left:16px;display:block;}
ul li {float:left;width:68px;height:26px;border:#CCE1B5 1px solid;margin-right:11px;text-align:center;line-height:26px;}
ul li a:link,li a:active,li a:visited{width:68px;display:block;text-decoration:none;color:#333;background:#fff;}
ul li a:hover{width:68px;display:block;text-decoration:none;color:#6F9F00;background:#F0FAE9;}
ul .liselect {float:left;width:68px;height:26px;background:#F0FAE9;border-left:#CCE1B5 1px solid;border-top:#CCE1B5 1px solid;border-bottom:#F0FAE9 1px solid;border-right:#CCE1B5 1px solid;margin-right:11px;text-align:center;line-height:26px;color:#6F9F00;}
ul .liselect a:link,.liselect a:active,.liselect a:visited{width:68px;display:block;text-decoration:none;color:#6F9F00;background:#F0FAE9;}
ul .liselect a:hover{width:68px;display:block;text-decoration:none;color:#DF2C91;background:#F0FAE9;}
/* main2 */
.main2 {width:754px;background:#F0FAE9;margin-left:28px;border-left:#CCE1B5 1px solid;border-bottom:#CCE1B5 1px solid;border-right:#CCE1B5 1px solid;padding:7px;}
.main2_frame {width:752px;background:#fff;border:#D8EAC4 1px solid;overflow:hidden;}
#tipinfo1,#tipinfo2,#tipinfo3,#tipinfo4,#tipinfo5{display:none;width:230px;background:#F8FCF5;height:80px;margin:5px;line-height:200%;;overflow:scroll;overflow-x:hidden;}
--> 
</style>
</head>
<script language="JavaScript" type="text/javascript" src="a8.js"></script>
<body>
<ul>
<li><a href="a1.php">基本资料</a></li>
<li><a href="a2.php">详细资料</a></li>
<li><a href="a3.php">内心独白</a></li>
<li><a href="a4.php">联系方法</a></li>
<li><a href="a5.php">约会交友</a></li>
<li><a href="a6.php">婚姻恋爱</a></li>
<li><a href="a7.php">红尘知己</a></li>
<li class="liselect"><a href="a8.php">以商会友</a></li>
<li><a href="a9.php">修改密码</a></li>
</ul>
<div class="main2">
<div class="main2_frame"><br />
<br />
<table width="650" border="0" align="center" cellpadding="2" cellspacing="0" style="color:#666;">
<form action="" method="post" name=wrzc_netFORM onSubmit="return chkform()">
<tr> 
<td width="169" height="35" align="right">以商会友目的:</td>
<td width="473">
<input name="d1" type="text" class=input id="d1" onFocus="setTagBehavior(this,'d1','tipinfo1');" value="" size="40" maxlength="120" >
<div id="tipinfo1"></div></td>
</tr>
<tr> 
<td height="35" align="right">公司/机构名称:</td>
<td>  <input name="d2" type="text" id="d2" value="" size="40" maxlength="40" class=input></td>
</tr>
<tr> 
<td height="35" align="right">职务分类:</td>
<td>
<select name="d3" id="d3">
<option value="" selected>请选择</option>
<option value="1" >经营管理</option>
<option value="2" >项目管理</option>
<option value="3" >人力资源</option>
<option value="4" >行政后勤</option>
<option value="5" >财务/审计</option>
<option value="6" >信息/资料管理</option>
<option value="7" >工程师(计算机硬件)</option>
<option value="8" >工程师(计算机软件)</option>
<option value="9" >工程师(计算机网络)</option>
<option value="10" >工程师(系统与安全)</option>
<option value="11" >工程师(其他)</option>
<option value="12" >工程/技术助理</option>
<option value="13" >网站管理/策划/设计</option>
<option value="14" >建筑/园林/室内设计</option>
<option value="15" >商业设计/创意</option>
<option value="16" >研发</option>
<option value="17" >生产管理</option>
<option value="18" >工程管理</option>
<option value="19" >生产工艺/设备</option>
<option value="20" >质量控制</option>
<option value="21" >技工/施工/操作人员</option>
<option value="22" >工程造价/预决算</option>
<option value="23" >农林牧渔</option>
<option value="24" >市场营销/商务拓展</option>
<option value="25" >市场调查与分析</option>
<option value="26" >广告/公关/媒介</option>
<option value="27" >销售/贸易</option>
<option value="28" >报关/跟单</option>
<option value="29" >电子商务</option>
<option value="30" >客户服务</option>
<option value="31" >采购</option>
<option value="32" >运输/物流/仓储</option>
<option value="33" >金融保险专业人员</option>
<option value="34" >金融保险经纪人</option>
<option value="35" >律师/法务人员</option>
<option value="36" >猎头/人才中介</option>
<option value="37" >顾问</option>
<option value="38" >策划</option>
<option value="39" >培训师</option>
<option value="40" >翻译</option>
<option value="41" >记者/新闻工作者</option>
<option value="42" >编辑/文字/文案</option>
<option value="43" >传播/发行</option>
<option value="44" >文艺制作</option>
<option value="45" >演艺人员</option>
<option value="46" >演艺/体育经纪人</option>
<option value="47" >导游</option>
<option value="48" >教练/运动员</option>
<option value="49" >医生/医师/护理人员</option>
<option value="50" >美容/保健/营养师</option>
<option value="51" >兽医/动物管理/园艺</option>
<option value="52" >安全保卫</option>
<option value="53" >服务业管理</option>
<option value="54" >服务业技术人员</option>
<option value="55" >服务人员</option>
<option value="56" >教师/教育工作者</option>
<option value="57" >义工/社团工作者</option>
<option value="58" >公务员</option>
<option value="59" >私营企业主</option>
<option value="60" >自由职业者</option>
<option value="61" >培训生</option>
<option value="62" >在校学生</option>
<option value="63" >其他</option>
</select></td>
</tr>
<tr> 
<td height="35" align="right">职位等级:</td>
<td>
<select name="d4" id="d4">
<option value="" selected>请选择</option>
<option value="1" >初期阶段(2年以内工作经验)</option>
<option value="2" >中级阶段(2-5年工作经验)</option>
<option value="3" >高级阶段(5年以上工作经验/经理或专才)</option>
<option value="4" >总监</option>
<option value="5" >高级管理级别(CEO, EVP, GM)</option>
<option value="6" >其他</option>
</select></td>
</tr>
<tr> 
<td height="35" align="right">职务名称:</td>
<td> 
<input name="d5" type="text" id="d5" value="" size="40" maxlength="40" class="input">
(如：董事长,经理,销售顾问)</td>
</tr>
<tr> 
<td height="35" align="right">产业类别:</td>
<td>
<select name="d6" id="d6">
<option value='' selected>请选择</option>
<option value="1" >互联网/电子商务</option>
<option value="2" >计算机硬件</option>
<option value="3" >计算机软件</option>
<option value="4" >集成电路</option>
<option value="5" >电子</option>
<option value="6" >计算机外设</option>
<option value="7" >光电通信</option>
<option value="8" >光学精密</option>
<option value="9" >通讯</option>
<option value="10" >电机电工</option>
<option value="11" >多媒体</option>
<option value="12" >制药/医疗设备/生物工程</option>
<option value="13" >仪器/仪表/工业自动化</option>
<option value="14" >金融/投资/证券</option>
<option value="15" >法律/会计</option>
<option value="16" >人才中介</option>
<option value="17" >咨询/专业服务</option>
<option value="18" >市场/广告/公关</option>
<option value="19" >广播/影视</option>
<option value="20" >传媒/新闻出版</option>
<option value="21" >保险业</option>
<option value="22" >建筑/房地产</option>
<option value="23" >物业管理</option>
<option value="24" >娱乐/运动/休闲</option>
<option value="25" >批发/零售</option>
<option value="26" >医疗/保健/卫生服务</option>
<option value="27" >旅游/酒店/餐饮服务</option>
<option value="28" >贸易</option>
<option value="29" >运输/物流/快递</option>
<option value="30" >艺术/文化</option>
<option value="31" >中介/服务业</option>
<option value="32" >机械/机电/重工业</option>
<option value="33" >食品/饮料/烟酒</option>
<option value="34" >办公/文教/安防</option>
<option value="35" >农林畜牧渔</option>
<option value="36" >五金/金属制品业</option>
<option value="37" >环保</option>
<option value="38" >化工/橡塑/精细化工</option>
<option value="39" >纺织/服装/服饰</option>
<option value="40" >车辆/机械动力</option>
<option value="41" >家具/室内设计/装潢</option>
<option value="42" >玻璃/陶瓷</option>
<option value="43" >家电业</option>
<option value="44" >工艺品/玩具</option>
<option value="45" >纸品/印刷/包装</option>
<option value="46" >电力/电气/能源</option>
<option value="47" >矿产/冶金</option>
<option value="48" >航空/航天研究与制造</option>
<option value="49" >其他制造</option>
<option value="50" >培训机构/教育/科研院所</option>
<option value="51" >政府/公共事业</option>
<option value="52" >非盈利机构(协会/社团)</option>
<option value="53" >其他</option>
</select></td>
</tr>
<tr> 
<td height="35" align="right">学校科系:</td>
<td> 
<input name="d7" type="text" id="d7" value="" size="40" maxlength="40" class=input>
(如：广州大学，计算机应用)</td>
</tr>
<tr> 
<td height="35" align="right">熟悉领域:</td>
<td> 
<input name="d8" type="text" id="d8" value="" size="40" maxlength="40" class=input>
(如：网络，房地产)</td>
</tr>
<tr> 
<td height="35" align="right">专长兴趣:</td>
<td> 
<input name="d9" type="text" id="d9" value="" size="40" maxlength="40" class=input>
(如：营销，策划)</td>
</tr>
<tr> 
<td height="35" align="right">往来机构:</td>
<td>  <input name="d10" type="text" id="d10" value="" size="40" maxlength="40" class=input></td>
</tr>
<tr> 
<td height="35" align="right">工作经历:</td>
<td> 
<textarea name="d11" cols="60" rows="5" id="d11"></textarea>
<br>
请控制在2000字节，1000汉字。</td>
</tr>
<tr> 
<td height="35" align="right">&nbsp;</td>
<td bgcolor="#FFFFFF"><input type="hidden" name="submitok" value="modupdate" />
<input type="submit" name="Submit" value=" 修 改 " class="button" />　
        <a href="/my/a8.php?submitok=emptyupdate" class="uDF2C91" onClick="return confirm('请慎重：\n\n★确认清空吗？ ')"><b>清空“以商会友”类别资料</b></a></td>
</tr>
</form>
</table>
<table width="600" height="55" border="0" align="center" cellpadding="10" cellspacing="0" style="margin:20px 0 0 0">
  <tr>
    <td width="27" align="right" valign="top" style="padding-top:8px;"><img src="images/tips.gif" width="23" height="21" /></td>
    <td width="533" style="line-height:150%;color:#666;"><img src="images/li.gif" width="3" height="5" hspace="5" vspace="8" align="absmiddle" />资料修改后，本站客服人员对你的资料进行审核后方可显示。<br />
        <img src="images/li.gif" width="3" height="5" hspace="5" vspace="8" align="absmiddle" />遵守<a href="/law.html" target="_blank">互联网电子公告服务管理规定</a>以及中华人民共和国其他各项有关法律法规。<br />
        <img src="images/li.gif" width="3" height="5" hspace="5" vspace="8" align="absmiddle" />网软志成交友婚恋网将对您的资料保留最终决定权。</td>
  </tr>
</table>
<style type="text/css">
<!--
.back_southidc {BACKGROUND-IMAGE:url('image/titlebg.gif');COLOR:000000;}
.table_southidc {BACKGROUND-COLOR: A4B6D7;}
.tit {font-size: 14px;
}
.tr_southidc {BACKGROUND-COLOR: ECF5FF;}
-->
</style>
<div align="center">
<div align="center"></div>
<table width="670" border="0" align="center" cellpadding="2" cellspacing="1" class="table_southidc">
  <tr>
    <td height="25" colspan="2" class="back_southidc"><div align="center"><span style="font-weight: bold">免费版此功能不能保存,请联系购买正式版!</span></div></td>
  </tr>
  <tr class="tr_southidc">
    <form method="post" action="Admin_DataBackup.asp?action=Backup">
      <td width="563"><div align="left"><span class="tit"><span class="style6">欢迎注册《网软交友婚恋网站系统php正式版》 每套4800元
<br />
        联系QQ：<span class="style11">290116505<a target=blank href=tencent://message/?uin=290116505&Site=网软志成客服为你服务&Menu=yes><img border="0" src=qqonline.gif alt="网软志成客服为你服务" /></a>314730679</span><font face=Verdana><a target=blank href=tencent://message/?uin=314730679&Site=网软志成客服为你服务&Menu=yes><img border="0" src=qqonline.gif alt="网软志成客服为你服务" /></a></font>38306293</span><font face=Verdana><a target=blank href=tencent://message/?uin=38306293&Site=网软志成客服为你服务&Menu=yes><img border="0" src=qqonline.gif alt="网软志成客服为你服务" /></a></font>454882888</span><font face=Verdana><a target=blank href=tencent://message/?uin=454882888&Site=网软志成客服为你服务&Menu=yes><img border="0" src=qqonline.gif alt="网软志成客服为你服务" /></a></font><font face=Verdana><br />
          </font><span class="style11">电话：020-34700400,34506590,34709708,13719472523,13527894748<br />
            MSN：webmaster@wygk.cn<br />
            演示：<a href="http://www.cms163.net">http://www.cms163.net</a><br />
      官方：<a href="http://www.wrzc.net">http://www.wrzc.net</a></span></div></td>
      <td width="128"><a href="https://pay3.chinabank.com.cn/Payto?v_mid=8279"><img src="paymentsby_01.gif" width="127" height="62" border="0" /></a></td>
    </form>
  </tr>
</table>
</div></div>
<p align=center style="color:#999;width:770px;height:50px;">

</p>
<script language="javascript" src="http://127.0.0.1/ajax/wrzc_netPOP.js?t=网软志成交友婚恋网提醒您-&u=http://127.0.0.1&c=wrzcnet" id="wrzc_net2_1"></script>
<script language="javascript" src="http://127.0.0.1/ajax/wrzc_net2PB.js?u=http://127.0.0.1/my" id="wrzc_net2_2"></script>
<script language="javascript" src="http://127.0.0.1/ajax/wrzc_net2ONLINE.js?u=http://127.0.0.1" id="wrzc_net2_3"></script>
</body>
</html>
