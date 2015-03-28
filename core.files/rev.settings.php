<?php
//This denys anyone from seeing your details!
if(!defined('IN_INDEX')) { die('<center><img src="http://i.imgur.com/Acxi9pG.png"></img></center>'); }
/*
* Habbo Content Management System
*
* Created by Kryptos, Continued by the Community
*/

//Database Settings
$Rev['db']['server'] = 'localhost';
$Rev['db']['user'] = 'user';
$Rev['db']['pass'] = 'pass';
$Rev['db']['data'] = 'habbo';
$Rev['db']['port'] = '3306'; //NOTE: Leave as is unless you specifically set the port elsewhere
$Rev['db']['connect'] = 'pconnect'; //NOTE: LEAVE as is!

//Site Settings
$Rev['site']['http'] = 'https';
$Rev['site']['domain'] = ''.$Rev['site']['http'].'://localhost'; //NOTE: You will not need to end with a slash
$Rev['site']['name'] = 'Habbo';
$Rev['site']['slogan'] = 'Make new friends!';
$Rev['site']['email'] = 'habbo@sulake.com';
$Rev['site']['fb'] = 'HabboCOM';
$Rev['site']['twtr'] = 'twitter';
$Rev['site']['maint'] = true; //True = This is on Maintenance ; False = This will run as normal.
$Rev['site']['style'] = 'Default';

//User Settings
$Rev['user']['motto'] = '';
$Rev['user']['look'] = '';
$Rev['user']['credits'] = '';
$Rev['user']['points'] = ''; //If you are on R63, this will act as Pixels unless you have removed it, if you are on R63B, this will act as Duckets.
$Rev['user']['rank'] = '';

//Game Settings
$Rev['game']['ip'] = '127.0.0.1';
$Rev['game']['port'] = '30000';
$Rev['game']['swf'] = 'Habbo.Swf';
$Rev['game']['folder'] = '/gamedata/';
$Rev['game']['ext_var'] = 'externals.txt';
$Rev['game']['ext_flash'] = 'externals.txt';
$Rev['game']['furnidata'] = 'externals.txt';
$Rev['game']['prodata'] = 'externals.txt';

?>
