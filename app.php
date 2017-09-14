<?php
/**
 * Index primero se cargara el "content_provider.php"
 */

//Este bloque carga la informacion contenida en el archivo
//webinfo.nfo
$webinfofile=fopen('config/webinfo.ini','r+b');
$web_info=explode('•←¶§→•',fread($webinfofile,'1000'));
$title=$web_info[0];
$year=$web_info[1];
$copyright=$web_info[2];
$author=$web_info[3];
$actual_theme=fopen('config/skin.ini','r');
$thememanager=explode(':',fread($actual_theme,'123'));
$theme=$thememanager[1];
//-------------------------------------------------------------
include ('content_provider.php');
//-------------------------------------------------------------
include ('themes/'.$theme.'/theme.php');
//test
