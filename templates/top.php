<?php
session_start();
require_once('config/config.php');
require_once('libs.php');?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php /*
			if(isset($title)){
			echo $title;
			}else{
			echo "Название сайта";
			}*/
			
			
			
			
			?>
			<?=(isset($title))?$title:"Название сайта";?>
			</title>
	<meta name="description" content="<?=(isset($desc))?$desc:"Описание сайта";?>">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,400,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/elastislide.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/main.js"></script>
	<script src="/js/main.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<?php
	if($_SESSION['user_id']){
	?>
	<script src="js/home.js"></script>
	<script src="ckeditor/ckeditor.js"></script>
	<?php
	}
	if(count($scripts)>0){
	foreach($scripts as $one){
		?>
		<script src='<?=$one;?>'></script>
		<?php
	}
}
	?>
	

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
	
	<header>
		<div class="menu-top">
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-top" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="menu-top">
						<ul class="nav navbar-nav">
							<li><a href="/">Main</a></li>
							<li><a href="index.php?url=shipping">Free Shipping Over $50</a></li>
							<li><a href="index.php?url=support">Support</a></li>
							<li><a href="articles.php">Articles</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="flag"><img src="img/flag.jpg" alt=""></span>English <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">France</a></li>
									<li><a href="#">Russia</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">One more separated link</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">currecy: usd <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">currecy: eur</a></li>
									<li><a href="#">currecy: rur</a></li>
								</ul>
							</li>
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<?
							if(isset($_SESSION['user_id'])){
								?>
								<li><a href="home.php">HOME</a></li>
								<li><a href="Logout.php">Logout</a></li>
							<?php
							}else{
								?>
								<li><a href="login.php">Login</a></li>
								<li><a href="#">Signup</a></li>
							<?php
							}
							?>

							<li><a href="#" class="btn-red"><span class="glyphicon glyphicon-shopping-cart"></span>shopping cart</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div><!-- /.menu-top -->
<?if($_SERVER['PHP_SELF'] == '/index.php' ):?>
<?if($url == 'index'):?>
		<section class="menu-carousel">
			<div id="carousel" class="carousel fade" data-ride="carousel">
				<div class="main-menu">
					<nav class="navbar navbar-inverse">
						<div class="container">
							<div class="main-menu-bg">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#"><img src="img/logo.png" alt="StyleTour"><span>StyleTour</span></a>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="main-menu">
									<ul class="nav navbar-nav">
										<li><a href="#">Shop</a></li>
										<li><a href="#">Men</a></li>
										<li><a href="#">Women</a></li>
										<li><a href="#">Kids</a></li>
										<li><a href="#">Accessories</a></li>
										<li><a href="#">Sale</a></li>
									</ul>

									<div class="nav navbar-nav navbar-right">
										<form class="navbar-form navbar-left" role="search" method="get" action="">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search">
												<span class="input-group-btn">
													<button type="submit" class="btn btn-default" name="go"><i class="glyphicon glyphicon-search"></i></button>
												</span>
											</div>
										</form>
									</div>
								</div><!-- /.navbar-collapse -->
								<i class="search glyphicon glyphicon-search"></i>
							</div><!-- /.main-menu-bg -->
						</div><!-- /.container -->
					</nav>
				</div><!-- /.main-menu -->

				<!-- Indicators -->
				<div class="carousel-indicators-wrap">
					<ol class="carousel-indicators">
						<li data-target="#carousel" data-slide-to="0" class="active"></li>
						<li data-target="#carousel" data-slide-to="1"></li>
						<li data-target="#carousel" data-slide-to="2"></li>
						<li data-target="#carousel" data-slide-to="3"></li>
					</ol>
				</div><!-- /.carousel-indicators-wrap -->

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<!-- <img src="img/slider.jpg" alt=""> -->
						<div class="bgslide" style="background-image: url(img/slider.jpg);"></div>
						<div class="container">
							<div class="carousel-caption">
								<h1>Women's Apparel</h1>
								<h3>T-Shirts, Dress Shirts, Tanks, Pants and More...</h3>
								<a href="#" class="btn-red">Shop Women’s Apparel</a>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- <img src="img/slider.jpg" alt=""> -->
						<div class="bgslide" style="background-image: url(img/slider.jpg);"></div>
						<div class="container">
							<div class="carousel-caption">
								<h1>Women's Apparel 2</h1>
								<h3>T-Shirts, Dress Shirts, Tanks, Pants and More...</h3>
								<a href="#" class="btn-red">Shop Women’s Apparel</a>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- <img src="img/slider.jpg" alt=""> -->
						<div class="bgslide" style="background-image: url(img/slider.jpg);"></div>
						<div class="container">
							<div class="carousel-caption">
								<h1>Women's Apparel 3</h1>
								<h3>T-Shirts, Dress Shirts, Tanks, Pants and More...</h3>
								<a href="#" class="btn-red">Shop Women’s Apparel</a>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- <img src="img/slider.jpg" alt=""> -->
						<div class="bgslide" style="background-image: url(img/slider.jpg);"></div>
						<div class="container">
							<div class="carousel-caption">
								<h1>Women's Apparel 4</h1>
								<h3>T-Shirts, Dress Shirts, Tanks, Pants and More...</h3>
								<a href="#" class="btn-red">Shop Women’s Apparel</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>
<?endif;?>
<?endif;?>
	</header>

	<section class="main-slogan">
		<div class="container">
			<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h1>
		</div>
	</section>

	<section class="main-content">
		<div class="container">
			<div class="row">