<?php
if(!defined('IN_INDEX')) { die('<center><img src="http://i.imgur.com/Acxi9pG.png"></img></center>'); }
//This will check if the domain is hosted on Cloudflare. If you do not have it, I suggest you do or get a proxy!
if(isset($_SERVER['HTTP_CF_CONNECTING_IP'])) { $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP']; }
//Turns off error reporting
error_reporting(0);
//Defines the folders
define('F', 'core.files/');
define('C', 'cai/');

use Habbo as Hab;
     require_once F . C . 'class.core.php';
     require_once F . C . 'class.engine.php';
     require_once F . C . 'class.users.php';
     require_once F . C . 'class.tpl.php';
     require_once F . C . 'class.html.php';
     require_once F . C . 'class.forms.php';
     require_once F . C . 'int.core.php';
     require_once F . C . 'int.engine.php';
     require_once F . C . 'int.users.php';
     require_once F . C . 'int.tpl.php';
     require_once F . C . 'int.html.php';
     require_once F . C . 'int.forms.php';
     require_once F .  'rev.settings.php';

  $core = new Hab\core();
  $engine = new Hab\engine();
  $users = new Hab\users();
  $template = new Hab\template();
  $template->form = new Hab\forms();
  $template->html = new Hab\html();

//Start Session
session_start();
$engine->Initiate();
$template->Initiate();

?>
