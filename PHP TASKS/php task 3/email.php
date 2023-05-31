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
     <title>Email PHP Session</title>
</head>

<body>
<?php
$_SESSION['password']=$_POST['password'];
echo "Your Username is :".$_SESSION['username']."<br>";
echo "Your Password is :".$_SESSION['password']."<br>";
echo "Mr.".$_SESSION['name']." enter the email<br>";
?>
<form action="info.php" method="post">
Enter your email : <input type="email" name="email" required ><br>
<input type="Submit" name="submit">
</body>
</html>