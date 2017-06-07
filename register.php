<?php

if ($_GET['url']) {
    $url = $_GET['url'];
} else {
    $url = 'index';
}
require_once('templates/top.php');

$query = "SELECT * FROM maintexts WHERE url='$url'";
$adr = mysqli_query($db_con, $query);
if (!$adr) {
    exit('error query');
}
$result = mysqli_fetch_array($adr);
//echo "<pre>";
//debug_var($result);
//echo "</pre>";
?>

    <div class="col-md-9 col-md-push-3">
        <div class="row">
            <div class="content">
                <h3><?= $result['name'] ?></h3>
                <?= $result['body'] ?>

                <?php /*
				echo "<pre>";
				print_r ($_POST);
				echo "</pre>";
				*/
                /*
                if($_POST){
                $password=$_POST['password'];
                $password_again=$_POST['password_again'];
                if($password==$password_again){
                echo "ok";
                }else{
                echo "error";
                }
                }*/


                if ($_POST) {
                    $err = [];
                    $password = $_POST['password'];
                    $password_again = $_POST['password_again'];
                    $login = $_POST['login'];
                    $email = $_POST['email'];
                    if ($password == $password_again) {
                        //echo "Пароли совпадают";
                    } else {
                        $err[] = "Не совпадают пароли";
                    }

                    $query = "SELECT * FROM users WHERE email ='$email'";
                    $addr = mysqli_query($db_con, $query);
                    if (!$addr) {
                        exit($query);
                    }
                    if (mysqli_num_rows($addr) > 0) {
                        $err[] = 'Такой email в базе уже есть';
                    }

                    if ($password != $password_again) {
                        $err[] = 'Пароли не равны';
                    }
                    if (count($err) == 0) {
                        //$query="INSERT INTO users(id,login,password,email,datereg,lastvisit,blockunblock) VALUES(NULL,'$login','$password','$email',now(),now(),'unblock')";
                        $query = "INSERT INTO users VALUES(NULL,
                                    '$login',
                                    '$password',
                                    '$email',
                                    NOW(),
                                    NOW(),
                                    'unblock')";
                        $inn = mysqli_query($db_con, $query);
                        if (!$inn) {
                           //exit($query);//переменная $query используется только для проверки кода
                        } else {
                            ?>
                            <!--                        <script>-->
                            <!--                            document.location.href = 'login.php';-->
                            <!--                        </script>-->

                            <?php
                        }
                    }else{
                        foreach ($err as $one) {
                            echo "<p style='color:red' class='error'>";
                            echo $one;
                            echo "</p>";
                        }
                    }


                }
                ?>
                <form class="form-horizontal" method="POST">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label" name="email" id="email">Email</label>

                        <div class="col-sm-10">
                            <input type="email" name="email" required class="form-control" id="email"
                                   placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Login" class="col-sm-2 control-label" name="login" id="login">Login</label>

                        <div class="col-sm-10">
                            <input type="login" name="login" required class="form-control" id="login"
                                   placeholder="Login">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label" name="password" id="password">Password</label>

                        <div class="col-sm-10">
                            <input type="password" required name="password" id="password" class="form-control"
                                   placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label" name="password" id="password">Confirm
                            password</label>

                        <div class="col-sm-10">
                            <input type="password" required name="password_again" id="password_again"
                                   class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Sign in</button>
                        </div>
                    </div>
                </form>





            </div>
            <!-- /.content -->
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
                    </div>
                    <!-- .widget -->
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
                    </div>
                    <!-- .widget -->
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

                                        <p>Make every category of your webstore look special by setting different color
                                            schemes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/slide-sidebar2.jpg" alt="">

                                <div class="sidebar-carousel-caption">
                                    <div>
                                        <h4>Fashion Colors For Women 2</h4>

                                        <p>Make every category of your webstore look special by setting different color
                                            schemes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/slide-sidebar1.jpg" alt="">

                                <div class="sidebar-carousel-caption">
                                    <div>
                                        <h4>Fashion Colors For Women 3</h4>

                                        <p>Make every category of your webstore look special by setting different color
                                            schemes.</p>
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
                    </div>
                    <!-- #carousel-sidebar -->
                </div>
                <div class="col-md-12 col-xs-6 text-center">
                    <div class="banner">
                        <img src="img/banner.jpg" alt="">

                        <h3>introducing</h3>

                        <h2><?= $result['name']; ?></h2>
                        <?php //bombshell ?>
                        <h3>forever</h3>
                        <a href="#" class="btn-red">shop now</a>
                    </div>
                </div>
            </div>
            <div class="about">
                <h3>About Store</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                <p><span>Ut enim ad minim veniam, quis nostrud exercitation. Aiusmod tempor incididunt ut labore et dolore magna aliqua</span>
                </p>
            </div>
        </div>
        <!-- /.sidebar -->
    </div>
<?php require_once('templates/bottom.php'); ?>