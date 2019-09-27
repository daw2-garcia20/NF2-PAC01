<?php
session_unset();
?>
<html>
 <head>
  <title>Please Log In</title>
 </head>
 <body>
  <form method="post" action="secondpage.php">
   <p>Enter your username: 
    <input type="text" name="user"/>
   </p>
   <p>Enter your password: 
    <input type="password" name="pass"/>
   </p>
   <p>Enter your number: 
    <input type="text" name="number"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
 </body>
</html>
<html>
 <head>
  <title>Encuentra mi receta favorita</title>
 </head>
 <body>
<?php
date_default_timezone_set('America/New_York');
$month = date('n');
if ($month ==  1) { echo 'enero'; }
if ($month ==  2) { echo '28 (unless it\'s a leap year)'; }
if ($month ==  3) { echo '31'; }
if ($month ==  4) { echo '30'; }
if ($month ==  5) { echo '31'; }
if ($month ==  6) { echo '30'; }
if ($month ==  7) { echo '31'; }
if ($month ==  8) { echo '31'; }
if ($month ==  9) { echo 'septiembre'; }
if ($month == 10) { echo 'octubre'; }
if ($month == 11) { echo '30'; }
if ($month == 12) { echo '31'; }
echo "<br>";
$myplato = urlencode("macarrones");
echo "<a href='secondpage.php?plato=$myplato'>";
echo "Clicka aqui para ver informacion sobre mi receta favorita!"; 
echo "</a>";
?>

<?php
$nombre_usuario = $_GET['usuario'] ?? 'nadie';
$nombre_usuario = isset($_GET['usuario']) ? $_GET['usuario'] : 'nadie';
$nombre_usuario = $_GET['usuario'] ?? $_POST['usuario'] ?? 'nadie';
echo $nombre_usuario;
?>
 </body>
</html>
