<?php
$match = 'pas123';

if(isset($_POST['password'])) {
  $password = $_POST['password'];
  if(!empty($password)) {
     if($password==$match) {
    echo 'That is correct!';

  }else{
    echo 'That is incorrect!';
       }
  }else {
    echo 'Please enter a password';
  }
}

?>

<form action="day4file6.php" method="POST">
Password:<br>
 <input type="password" name="password"><br><br>
 <input type="submit" value="Submit">
</form>