<?php  

# Session Start
session_start();


#Database connection :
include('../config/connection.php');

if($_POST) {

    $q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
    $r = mysqli_query($dbc, $q);

    if (mysqli_num_rows($r) == 1) {
        
        $_SESSION['username'] = $_POST['email'];
        header('Location: index.php');

    }
}


?>

<!DOCTYPE html>
<html>

<head>

	<title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php  include('config/css.php'); ?>

    <?php  include('config/js.php'); ?>

</head><!-- head END -->

<body>

    <div id="wrap">

        <?php //include(D_TEMPLATE.'/navigation.php'); ?>


        <div class="container">


            <div class="row">
		
                <div class="col-md-4 col-md-offset-4">

                    <div class="panel panel-info">

                        <div class="panel-heading">
                           <h3>Login</h3>
                        </div> <!-- END panel heading -->

                        <div class="panel-body">

                            <form action="login.php" method="POST" role="form">

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                                <!--  <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Check me out
                                </label>
                                </div> -->
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>

                        </div> <!-- END panel body -->

                    </div> <!-- END panel -->

                </div> <!-- END col-md-4 -->

            </div> <!-- END row -->

        </div> <!-- END container -->

    </div><!-- wrap END -->

    <?php //include(D_TEMPLATE.'/footer.php'); ?> 


    <?php //if($debug == 1) { include('widgets/debug.php'); } ?> 

</body>
</html>