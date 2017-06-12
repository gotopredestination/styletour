<?php 
function query($query){
    global $db_con;
	$result=mysqli_query($db_con, $query);


	if(!$result){
	exit('error');
	}
  return mysqli_fetch_array($result);
}

function queryA($query){
    global $db_con;
	$result=mysqli_query($db_con, $query);


	if(!$result){
	exit('error');
	}
 return $result;
}