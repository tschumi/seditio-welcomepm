	<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net

[BEGIN_SED]
File=plugins/welcomepm/welcomepm.php
Version=100
Updated=2006-apr-23
Type=Plugin
Author=riptide
Description=Sends a welcome PM to every new registered user
[END_SED]

[BEGIN_SED_EXTPLUGIN]
Code=welcomepm
Part=main
File=welcomepm
Hooks=users.register.add.done
Minlevel=0
Order=10
Tags=
[END_SED_EXTPLUGIN]

==================== */

if ( !defined('SED_CODE') ) { die("Wrong URL."); }

require('plugins/welcomepm/lang/welcomepm.'.$usr['lang'].'.lang.php');

$welcometext = str_replace("[username]", $rusername, $L['plu_pmtext']);

$sql = sed_sql_query("SELECT user_id FROM $db_users WHERE user_name='$rusername' AND user_email='$ruseremail'");
$row = sed_sql_fetcharray($sql);

$sql = sed_sql_query("INSERT INTO $db_pm (pm_state, pm_date, pm_fromuserid, pm_fromuser, pm_touserid, pm_title, pm_text) values ('0', '".$sys['now_offset']."', '".$cfg['plugin']['welcomepm']['fromuserid']."', '".$cfg['plugin']['welcomepm']['fromusername']."', '".$row['user_id']."', '".$L['plu_pmtitle']."', '".$welcometext."')");

sed_stat_inc('totalpms');

?>
