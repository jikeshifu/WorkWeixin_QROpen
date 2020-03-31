<?php
session_start();

header("Content-type: text/html; charset=utf-8");

$ac = $_GET['ac'] ? $_GET['ac'] : 'setting';

if (!$_SESSION['id']) {
	$ac = 'login';
}

require './class/function.php';
require './class/db.class.php';

require './lib/Smarty.class.php';

$smarty = new Smarty;

require_once './app/admin/'.$ac.'.php';
