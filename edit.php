<?php
require_once ('templates/top.php');
if($_SESSION['user_id']){

$id=(int)$_GET['id'];
$query="SELECT * FROM articles WHERE id=$id AND user_id=".$_SESSION['user_id'];

$adr=queryA($query);
$com=mysqli_fetch_array($adr);

if($_POST){
$nameArticle=$_POST['nameArticle'];
$descriptionArticle=$_POST['descriptionArticle']; 

$err=[];

if($_FILES){
	$filename ='/uploads/'.$_FILES['imageForArticles']['name'];
	$move=move_uploaded_file($_FILES['imageForArticles']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$filename);
	if(!$move){
	exit('error file upload');
	} 
}else{
$filename=$com['imageForArticles'];
}

if(empty($err)){

	$query= "UPDATE articles SET nameArticle='$nameArticle',descriptionArticle='$descriptionArticle',imageForArticles='$filename' WHERE id=$id AND user_id=".$_SESSION['user_id'];
	$adr=queryA($query);
	 ?>
                               <script>
                                    document.location.href = 'articles.php';
                               </script>

        <?php
	


}


}






?>
							<form method="POST" enctype="multipart/form-data">
							<div class="form-group">
							<label for="nameArticle">Название</label>
							<input type="text" id="nameArticle" name="nameArticle" required class="form-control" placeholder="Название" value="<?=$com['nameArticle']?>">
							</div>
							<div class="form-group">
							<label for="descriptionArticle">Описание</label>
							<textarea id="descriptionArticle" name="descriptionArticle" required class="form-control ckeditor textarea" rows="3" placeholder="Описание"><?=$com['descriptionArticle'] ?></textarea>
							<div class="form-group">
    <label for="imageForArticles">Изображение</label>
	
	<?if($com['ImageForArticles'] != ''){
 ?><img src='<?=$com['ImageForArticles'];?>'/>
 <?
 }else{
 
 echo "<img src='/uploads/images.jpg'/>";
 
 }
 ?>
    <input type="file" id="imageForArticles" name="imageForArticles">
    <p class="help-block">Добавьте изображение</p>
  </div>
							</div>
							<input class="btn btn-default btn-danger" type="submit" value="Добавить">
							</form>

<?php
}






















require_once ('templates/bottom.php');