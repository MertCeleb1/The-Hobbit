<?php

$host="localhost";
$user="root";
$pass="";
$db="deneme";

$conn=mysqli_connect($host,$user,$pass,$db) or die("bağlanamadık ".mysqli_connect_error());