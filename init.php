<?php 
#starting the users session
session_start();
require 'db.php';
require 'users.php';
require 'general.php';
 
$users 		= new Users($db);
$general 	= new General();
 
$errors 	= array();