<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title><?php echo "{$CONF["sitename"]} - {$CONF["siteslogan"]}"; ?></title>
<?php include("{$CONF["path"]}/public_html/layout/smartstyle.css"); ?>
</head>
<body background="<?php echo $CONF["base"]; ?>/images/bg.gif" link=444444 vlink=444444 alink=444444 leftmargin=0 topmargin=0 marginheight=0 marginwidth=0>

<table border=0 cellspacing=0 cellpadding=0 width="100%">
<tr align=right valign=middle><td height=18 colspan=2><a href=<?php echo $CONF["base"]; ?>>home</a>
 / <a href=<?php echo "{$CONF["base"]}/users.php?mode=profile&uid=1"; ?>>contact</a>&nbsp;</td></tr>
<tr valign=bottom><td>&nbsp;<a href=<?php echo $CONF["base"]; ?>><img src=<?php echo $CONF["base"]; ?>/images/logo.gif width=350 height=84 border=0 alt=<?php echo $CONF["sitename"] ?>></a></td>
<td align=right><form action="<?php echo $CONF["base"]; ?>/search.php" method=get>search<input type=text size=15 name="query">&nbsp;</form></td></tr>
<tr><td bgcolor=000000 colspan=2><img src=<?php echo $CONF["base"]; ?>/images/speck.gif width=1 height=1></td></tr>
<tr><td bgcolor=AAAAAA colspan=2><img src=<?php echo $CONF["base"]; ?>/images/speck.gif width=1 height=6></td></tr>
<tr><td bgcolor=FFFFFF colspan=2><img src=<?php echo $CONF["base"]; ?>/images/speck.gif width=1 height=1></td></tr>
</table>

<table border=0 cellspacing=0 cellpadding=0 width="100%">
<tr align=center valign=middle bgcolor=DDDDDD><td height=20><a href=<?php echo $CONF["base"]; ?>/submit.php?type=story>contribute</a> 
&#149; <a href=<?php echo $CONF["base"]; ?>/links.php>web resources</a> 
&#149; <a href=<?php echo $CONF["base"]; ?>/pollbooth.php>past polls</a> 
&#149; <a href=<?php echo $CONF["base"]; ?>/calendar.php>calendar</a> 
<?php PrintPluginHeaderMenuItems(); ?>
&#149; <a href=<?php echo $CONF["base"]; ?>/search.php>advanced search</a>  
&#149; <a href=<?php echo $CONF["base"]; ?>/stats.php>site statistics</a></td></tr>
<tr><td bgcolor=AAAAAA><img src=<?php echo $CONF["base"]; ?>/images/speck.gif width=1 height=1></td></tr>
<tr><td bgcolor=EEEEEE><img src=<?php echo $CONF["base"]; ?>/images/speck.gif width=1 height=10></td></tr>
</table>

<table border=0 cellspacing=0 cellpadding=0 width="100%">
<tr><td bgcolor=FFFFFF colspan=2><img src=<?php echo $CONF["base"]; ?>/images/speck.gif width=1 height=1></td></tr>
<tr bgcolor=DDDDDD><td height=20>&nbsp;<b>Welcome to GeekLog
<?php if (!empty($USER["name"])) echo " {$USER["name"]}"; ?>!</b></td><td align=right><b><?php echo date("D M j"); ?></b>&nbsp;</td></tr>
<tr><td bgcolor=AAAAAA colspan=2><img src=<?php echo $CONF["base"]; ?>/images/speck.gif width=1 height=1></td></tr>
<tr><td bgcolor=FFFFFF colspan=2><img src=<?php echo $CONF["base"]; ?>/images/speck.gif width=1 height=15></td></tr>
</table>

<!-- feature block -->
<table bgcolor=ffffff border=0 cellspacing=0 cellpadding=5 width="100%">

<!-- story block -->
<td width="100%" valign=top>
