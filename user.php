<?php
$Name = $_POST['nickname'];
$Email = $_POST['email'];
$Age = $_POST['age'];
$Password = $_POST['password'];

$MYSQL = new mysqli('localhost', 'root', '', 'space');
$MYSQL->query("insert into `space` (`nickname`, `email`, `age`,`password`) values('$Name','$Email','$Age','$Password')");
$MYSQL->close();
?>