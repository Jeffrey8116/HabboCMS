<?php
namespace Habbo;
if(!defined('IN_INDEX')) { die('<center><img src="http://i.imgur.com/Acxi9pG.png"></img></center>'); }
class engine
{
	final public function Start()
	{
		global $Rev;
		if(!$this->initiated)
		{
			$this->setDB('connect', mysqli_connect);
			$this->setDB('pconnect', mysqli_pconnect);
			$this->setDB('select_db', mysqli_select_db);
			$this->setDB('query', mysqli_query);
			$this->setDB('num_rows', mysqli_num_rows);
			$this->setDB('fetch_assoc', mysqli_fetch_assoc);
			$this->setDB('fetch_array',mysqli_fetch_array);
			$this->setDB('result', mysqli_result);
			$this->setDB('free_result', mysqli_free_result);
			$this->setDB('escape_string', mysqli_real_escape_string);

			$this->initiated = true;

			$this->connect($Rev['db']['connect']);
		}
	}
}
?>
