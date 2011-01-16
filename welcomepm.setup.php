<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net

[BEGIN_SED]
File=plugins/welcomepm/welcomepm.setup.php
Version=100
Updated=2006-apr-23
Type=Plugin
Author=riptide
Description=Sends a welcome PM to every new registered user
[END_SED]

[BEGIN_SED_EXTPLUGIN]
Code=welcomepm
Name=Welcome PM
Description=Sends a welcome PM to every new registered user
Version=100
Date=2006/04/23
Author=riptide
Copyright=This plugin can be used for free.
Notes=
SQL=
Auth_guests=R
Lock_guests=12345A
Auth_members=RW
Lock_members=12345A
[END_SED_EXTPLUGIN]

[BEGIN_SED_EXTPLUGIN_CONFIG]
fromuserid=01:string::1:ID of the sender
fromusername=02:string::webmaster:Name of the sender
[END_SED_EXTPLUGIN_CONFIG]

==================== */

if ( !defined('SED_CODE') ) { die("Wrong URL."); }

?>
