<?php

if($_GET['url']){
	$url=$_GET['url'];
}else {
	$url='index';
}
require_once('templates/top.php');

$query= "SELECT * FROM maintexts WHERE url='$url'";
$result=query($query);
//echo "<pre>";
//debug_var($result);
//echo "</pre>";
?>
				<div class="col-md-9 col-md-push-3">
					<div class="row">
						<div class="content">
							<h3><?=$result['name']?></h3>
							<?=$result['body']?>

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
			<?php require_once('templates/bottom.php');?>