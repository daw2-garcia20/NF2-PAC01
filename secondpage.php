<?php
    echo "Mi plato favorito es ";
    echo $_GET['plato'];
    $notaplato = 10;
    echo "Mi puntuacion para este plato es: ";
    echo $notaplato;
?>
<?php
session_start();
setcookie("username","Andy",time()+60);
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['usernumber'] = $_POST['number'];
$_SESSION['authuser'] = 0;

//Check username and password information
if (($_SESSION['username'] == 'Andy') and
    ($_SESSION['userpass'] == '12345')) {
    $_SESSION['authuser'] = 1;
} else {
    echo "<br>";
    echo ' Sorry, but you don\'t have permission to view this page!';
    exit();     
}
?>
<html>
 <head>
  <title> Recetario <?php echo $_GET['plato'];?></title>
 </head>
 <body>
<?php
    echo "Mi plato favorito es ";
    echo $_GET['plato'];
    $notaplato = 10;
    echo "<br>";
    echo "Mi puntuacion para este plato es: ";
    echo $notaplato;
?>
 </body>
</html>
