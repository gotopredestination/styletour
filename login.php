<?php
require_once('templates/top.php');

if ($_POST) {
    $email =$_POST['email'];
    $password =$_POST['password'];

    $query="SELECT * FROM users WHERE
                                email='$email' AND
                                password='$password'";

    $adr=mysqli_query($db_con,$query);
    if(!adr){
        exit($query);
    }
    if(mysqli_num_rows($adr)>0){
        $user=mysqli_fetch_array($adr);
         $_SESSION['user_id'] = $user['id'];
        ?>
                               <script>
                                    document.location.href = 'index.php';
                               </script>

        <?php
    }else{
        echo "Ошибка входа";
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
            <label for="inputPassword3" class="col-sm-2 control-label" name="password" id="password">Password</label>

            <div class="col-sm-10">
                <input type="password" required name="password" id="password" class="form-control"
                       placeholder="Password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sign in</button>
            </div>
        </div>
    </form>


<?php
require_once('templates/bottom.php');