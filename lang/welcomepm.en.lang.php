<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net

[BEGIN_SED]
File=plugins/welcomepm/lang/welcomepm.en.lang.php
Version=100
Updated=2006-apr-23
Type=Plugin
Author=riptide
Description=Sends a welcome PM to every new registered user
[END_SED]
==================== */

$L['plu_pmtitle'] = "Welcome!";

/*
$L['plu_pmtext'] Usage:

Use [username] as placeholder for the username of the receiver.
Use \n to make a vertical spacing.

Example: Hi [username],\n\nWelcome to my website...\n\nSee ya\nwebmaster

With the example above, the user "riptide" will receive a pm like this:

Hi riptide,

Welcome to my website...

See ya
webmaster

*/
$L['plu_pmtext']  = "Hi [username],\n\nWelcome to my website...\n\nSee ya\nwebmaster";

?>
