<h1>Succesfully registered with these informations ;</h1>

<h1>Fullname: <?php echo $_GET["fullname"]; ?><br>
<h1>Email: <?php echo $_GET["email"]; ?><br>
<h1>Password: <?php echo $_GET["password"]; ?><br></h1>

<?php

$fullname =  $_GET["fullname"];
$email = $_GET["email"];
$password = $_GET["password"];

$file = 'memberlist.dat';
$içerik = file_get_contents($file);
file_put_contents($file, "$fullname ", FILE_APPEND);
file_put_contents($file, "$email ", FILE_APPEND);
file_put_contents($file, "$password \n", FILE_APPEND);

?>

<a href = "Login.php">Click here to login >
