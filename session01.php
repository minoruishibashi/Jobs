<?php
session_start();

$sid = session_id();

echo $sid;

// SESSION変数
$_SESSION['name'] = '石橋実';
$_SESSION['age'] = 41;


?>
