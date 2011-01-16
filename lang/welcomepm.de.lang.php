<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net

[BEGIN_SED]
File=plugins/welcomepm/lang/welcomepm.de.lang.php
Version=100
Updated=2006-apr-23
Type=Plugin
Author=riptide
Description=Sends a welcome PM to every new registered user
[END_SED]
==================== */

$L['plu_pmtitle'] = "Wilkommen!";

/*
$L['plu_pmtext'] Anleitung:

Verwende [username] als Platzhalter für den Benutzernamen des Empfängers.
Verwende \n um eine Zeilenschaltung durchzuführen.

Beispiel: Hallo [username],\n\nWillkommen auf meiner Website...\n\nMan sieht sich\nwebmaster

Im oben genannten Beispiel, bekommt der Benutzer "riptide" folgendes PM:

Hallo riptide,

Wilkommen auf meiner Website...

Man sieht sich
webmaster

*/
$L['plu_pmtext']  = "Hallo [username],\n\nWillkommen auf meiner Website...\n\nMan sieht sich\nwebmaster";

?>
