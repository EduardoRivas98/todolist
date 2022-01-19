<?php 

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:dbname=to-do;host=localhost','root','');

//handle this in some otherway

if(!isset($_SESSION['user_id'])){
    die('You are not signed in.');
}

