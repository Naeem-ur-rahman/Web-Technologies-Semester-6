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
     <title>Password PHP Session</title>
</head>

<body>
<?php
$_SESSION['username']=$_POST['username'];
echo "Your Username is :".$_SESSION['username']."<br>";
echo "Mr.".$_SESSION['name']." enter the password<br>";
?>
<form action="email.php" method="post">
Enter yor password : <input type="password" name="password" required ><br>
<input type="Submit" name="submit">
</body>
</html>