<?php
//My Database Connection info
const MY_DSN = "mysql:host=127.0.0.1;port=3306;dbname=interestpoint";
const MY_USER = "root";
const MY_PASS = "";

$db = new \PDO(MY_DSN, MY_USER, MY_PASS);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$fields = array(
    'userName'=>'User Name',
    'firstName'=>'First Name',
    'lastName'=>'Last Name',
    'email'=>'Email',
);
?>