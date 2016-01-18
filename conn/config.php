<?php

$host  = 'localhost';
$user = 'root';
$pass = '';
$db	  = 'simplecrudajax';

$link = mysqli_connect($host,$user,$pass,$db) or die(mysqli_error());