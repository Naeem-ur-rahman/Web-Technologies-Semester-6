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
     <title>UserName PHP Session</title>
</head>

<body>
<?php
$_SESSION['name']=$_POST['name'];
echo "Mr.".$_SESSION['name']." enter the username<br>";
?>

<form action="password.php" method="post">
Enter your Username : <input type="text" name="username" required ><br>
<input type="Submit" name="submit">
</body>

</html>