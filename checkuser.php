

<?php

$fullname =  $_GET["fullname"];
$email =  $_GET["email"];
$password =  $_GET["password"];
$isCorrect = false;

$fh = fopen('memberlist.dat','r');
while ($line = fgets($fh)) {
  if(strpos($line, $email) !== false && strpos($line, $password) !== false){
      $isCorrect = true;?>
      <h1>Welcome to the education management system >>> <?php echo $_GET["fullname"]; ?><br>
      <?php
  }
  // <... Do your work with the line ...>
  // echo($line);
}

if($isCorrect == false){
  ?>
  <h1>Incorrect name or password</h1>
  <a href = "Login.php">Click here to try again >
  <?php
}
fclose($fh);

?>
