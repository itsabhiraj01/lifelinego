<?php  include('config/setup.php'); //setup file ?>

<?php  

# Session Start
session_start();

if($_POST) {

    $q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
    $r = mysqli_query($dbc, $q);

    if (mysqli_num_rows($r) == 1) {
        
        $_SESSION['username'] = $_POST['email'];
        header('Location: index.php');

    }
}
?>


<?php include('template/header.php'); //header ?>

<?php include('views/'.$view['name'].'.php'); //Page view ?>

<?php include('template/footer.php'); //footer ?> 