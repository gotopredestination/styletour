<?php

$id=(int)$_POST['id'];
require_once('config/config.php');
require_once('/libs.php');
$query="SELECT picture FROM gallery WHERE id=$id";
$adr=queryA($query);
$result=mysqli_fetch_array($adr);
echo '<img src="'.$result['picture'].'"/>';
