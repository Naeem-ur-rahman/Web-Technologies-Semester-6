<?php
include 'connect.php';

if(isset($_POST['submit'])){
     $update_id = $_POST['id'];
     $message = $_POST['message'];
     $update_message  = $conn->prepare("Update `messages` Set message=? where id = ?");
     $update_message->execute([$message,$update_id]);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Update</title>
</head>

<body>
   <?php 
   $update = $_GET['update'];
   $select_message = $conn->prepare("Select * from `messages` where id =?");
   $select_message->execute([$update]);
   if($select_message->rowCount()>0){
     $fetch_message = $select_message->fetch(PDO::FETCH_ASSOC);
     ?>
     <form action="" method="post">
          <input type="hidden" name="id" value="<?= $fetch_message['id']?>">
          <input type="hidden" value="<?= $fetch_message['user_id']?>">
          <input type="text" readonly value="<?= $fetch_message['name']?>"><br>
          <input type="text" readonly value="<?= $fetch_message['email']?>"><br>
          <input type="text" readonly value="<?= $fetch_message['number']?>"><br>
          <input type="text" name="message" value="<?= $fetch_message['message']?>"><br>
          <input type="submit" value="submit" name="submit" >
     </form>
     <?php
   }
   ?>
</body>

</html>