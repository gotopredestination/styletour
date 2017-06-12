<?php session_start();
require_once ('/config/config.php');
require_once ('/libs.php');
if($_GET['id']){
$id=(int)($_GET['id']);
//$user_id=(int)

//$query="SELECT * FROM articles WHERE id = $id AND FROM users WHERE user_id=".$_SESSION['user_id'];
$query="SELECT * FROM articles WHERE id = $id";
$adr=queryA($query);
if(mysqli_num_rows($adr)>0){
	$res=mysqli_fetch_array($adr);
 $file = $_SERVER['DOCUMENT_ROOT'].$res['ImageForArticles'];
 //exit($file);
	if(file_exists($file)){
	@unlink($file);
	}
	$query="DELETE FROM articles WHERE id=$id";
	queryA($query);
}
}