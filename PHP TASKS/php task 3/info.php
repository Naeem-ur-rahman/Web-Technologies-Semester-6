<?php 
//session started

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>INFO PHP Session</title>
</head>

<body>
<?php
$_SESSION['email']=$_POST['email'];
echo "Your Username is :".$_SESSION['username']."<br>";
echo "Your Email Address is :".$_SESSION['email']."<br>";
echo "Your Password is :".$_SESSION['password']."<br>";
echo "Mr.".$_SESSION['name']." enter the email<br>";
?>
<a href="destroy.php">Destroy Session</a>
</body>
</html>