<?php 
session_start();
include("config.php"); 
include("login.php");//引入函數庫
$acct = $_POST['acct'];
$pw = $_POST['pw'];
$name = $_POST['name'];
login($acct,$pw);//使用登入函數
?>