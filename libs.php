<?php 
	function query($query){
	$query = $query;
	$result=mysqli_query($db_con, $query);


	if(!$result){
	exit('error');
	}
	return $result;
	}