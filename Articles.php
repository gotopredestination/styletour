<?php 
require_once('templates/top.php'); 
require_once('libs.php'); 

if($_SESSION['user_id']){

?>


<div class="col-md-9 col-md-push-3">
					<div class="row">
						<div class="content">
							<h3><?=$result['name']?></h3>
							<?=$result['body']?>
<?





if($_POST){

//date('ymdthis'.'jpg');

if($_FILES){
	$filename ='/uploads/'.$_FILES['imageForArticles']['name'];
	$move=move_uploaded_file($_FILES['imageForArticles']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$filename);
	if(!$move){
	exit('error file upload');
	} 
}else{
$filename='';
}


$nameArticle=$_POST['nameArticle'];
$descriptionArticle=$_POST['descriptionArticle'];
$imageForArticles=$_FILES['ImageForArticles'];

//пробуем libs.php
//$queryArticle="INSERT INTO articles VALUES(NULL,'$nameArticle','$descriptionArticle','$filename');";
//$returnQueryArticle = mysqli_query($db_con, $queryArticle);
//if(!$returnQueryArticle){
// exit('error');
//}
queryA("INSERT INTO articles VALUES(NULL,'$nameArticle','$descriptionArticle','$filename', ".$_SESSION['user_id'].");");


?>
<script>
 document.location.href="Articles.php"
</script>
<?php
}
?>
							<form method="POST" enctype="multipart/form-data">
							<div class="form-group">
							<label for="nameArticle">Название</label>
							<input type="text" id="nameArticle" name="nameArticle" required class="form-control" placeholder="Название">
							</div>
							<div class="form-group">
							<label for="descriptionArticle">Описание</label>
							<textarea id="descriptionArticle" name="descriptionArticle" required class="form-control ckeditor textarea" rows="3" placeholder="Описание"></textarea>
							<div class="form-group">
    <label for="imageForArticles">Изображение</label>
    <input type="file" id="imageForArticles" name="imageForArticles">
    <p class="help-block">Добавьте изображение</p>
  </div>
							</div>
							<input class="btn btn-default btn-danger" type="submit" value="Добавить">
							</form>
 


<?php
/*$query = "SELECT * FROM articles;";
$returnQuery=mysqli_query($db_con, $query);


if(!$returnQuery){
 exit('error');
}
*/

queryA("SELECT * FROM articles;");

?>
<table width='100%' class="table">
<tr>
  <td class="active"><h3>ФОТО</h3></td>
  <td class="success"><h3>НАЗВАНИЕ</h3></td>
  <td class="warning"><h3>ДЕЙСТВИЯ</h3></td>
  
</tr>
<?php
$returnQuery=queryA("SELECT * FROM articles;");
while($result=mysqli_fetch_array($returnQuery)){
?>
<tr>
 <td class="active"><?if($result['ImageForArticles'] != ''){
 ?><img class="imageQuery" data-title="<?=$result['nameArticle'];?>" src='<?=$result['ImageForArticles'];?>'/>
 <?
 }else{
 
 echo "<img src='/uploads/images.jpg'/>";
 
 }
 ?>
 </td>
 <td class="success"><?=$result['nameArticle']?></td>
 <td class="warning">
  
  <a href="edit.php?id=<?=$result['id'];?>" class="btn btn-block btn-default">Редактировать</a>
  <a href="#" onclick="delete_position('del.php?id=<?=$result['id'];?>','Вы действительно хотите удалить?')" class="btn btn-block btn-default">Удалить</a>
 </td>
</tr>
<?php
}
echo "</table>";
?>

</table>
<div class="empty"></div>


							
							
							
							
							
							
							
							
							
							
							
							
						</div> <!-- /.content -->
					</div>
				</div>
				<div class="col-md-3 col-md-pull-9">
					<div class="sidebar">
						<div class="row">
							<div class="col-xs-6 col-md-12">
								<div class="widget">
									<h3>Popular Categories</h3>
									<ul>
										<li><a href="#">Performance Collection</a></li>
										<li><a href="#">Pants</a></li>
										<li><a href="#">Woven Shirts</a></li>
										<li><a href="#">Earth-Friendly Apparel</a></li>
										<li><a href="#">Sweatshirts</a></li>
										<li><a href="#">Infants</a></li>
										<li><a href="#">Shorts</a></li>
										<li><a href="#">Adult Essentials</a></li>
										<li class="more"><a href="#">Show More</a></li>
									</ul>
								</div><!-- .widget -->
							</div>
							<div class="col-xs-6 col-md-12">
								<div class="widget">
									<h3>Popular Brands</h3>
									<ul>
										<li><a href="#">Ashworth</a></li>
										<li><a href="#">Rabbit Skins</a></li>
										<li><a href="#">Izod</a></li>
										<li><a href="#">LAT</a></li>
										<li><a href="#">Authentic Pigment</a></li>
										<li><a href="#">Canvas</a></li>
										<li><a href="#">Apples & Oranges</a></li>
										<li><a href="#">OccuNomix</a></li>
										<li class="more"><a href="#">Show More</a></li>
									</ul>
								</div><!-- .widget -->
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 col-xs-6 text-center">
								<div id="carousel-sidebar" class="carousel fade" data-ride="carousel">
									<!-- Wrapper for slides -->
									<div class="carousel-inner" role="listbox">
										<div class="item active">
											<img src="img/slide-sidebar1.jpg" alt="">
											<div class="sidebar-carousel-caption">
												<div>
													<h4>Fashion Colors For Women</h4>
													<p>Make every category of your webstore look special by setting different color schemes.</p>
												</div>
											</div>
										</div>
										<div class="item">
											<img src="img/slide-sidebar2.jpg" alt="">
											<div class="sidebar-carousel-caption">
												<div>
													<h4>Fashion Colors For Women 2</h4>
													<p>Make every category of your webstore look special by setting different color schemes.</p>
												</div>
											</div>
										</div>
										<div class="item">
											<img src="img/slide-sidebar1.jpg" alt="">
											<div class="sidebar-carousel-caption">
												<div>
													<h4>Fashion Colors For Women 3</h4>
													<p>Make every category of your webstore look special by setting different color schemes.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#carousel-sidebar" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-sidebar" data-slide-to="1"></li>
										<li data-target="#carousel-sidebar" data-slide-to="2"></li>
									</ol>
								</div><!-- #carousel-sidebar -->
							</div>
							<div class="col-md-12 col-xs-6 text-center">
								<div class="banner">
									<img src="img/banner.jpg" alt="">
									<h3>introducing</h3>
									<h2><?=$result['name'];?></h2>
									<?php //bombshell ?>
									<h3>forever</h3>
									<a href="#" class="btn-red">shop now</a>
								</div>
							</div>
						</div>				
						<div class="about">
							<h3>About Store</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
							<p><span>Ut enim ad minim veniam, quis nostrud exercitation. Aiusmod tempor incididunt ut labore et dolore magna aliqua</span></p>
						</div>
					</div> <!-- /.sidebar -->
				</div>

 

<?php }else {
echo "Ошибка входа";}

require_once('templates/bottom.php'); ?>