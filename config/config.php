<?php
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='styletour';
$db_port=3307;
$db_con=mysqli_connect($db_host,$db_user,$db_pass,$db_name,$db_port);
    if(!$db_con){
        exit('error');
    }
	