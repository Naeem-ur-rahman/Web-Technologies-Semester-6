<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>message table</title>
</head>

<body>
     <table border="1px">
          <tr>
               <th>Id</th>
               <th>User ID</th>
               <th>Name</th>
               <th>Email</th>
               <th>Number</th>
               <th>Messages</th>
          </tr>
          <?php
          $select_messages = $conn->prepare("Select * from `messages`");
          $select_messages->execute();
          if ($select_messages->rowCount() > 0) {

               while ($fetch_message = $select_messages->fetch(PDO::FETCH_ASSOC)) {
          ?>
          <tr>
               <td><?= $fetch_message['id']?></td>
               <td><?= $fetch_message['user_id']?></td>
               <td><a href="update.php?update=<?= $fetch_message['id'];?>"><?= $fetch_message['name']?></a></td>
               <td><?= $fetch_message['email']?></td>
               <td><?= $fetch_message['number']?></td>
               <td><?= $fetch_message['message']?></td>
          </tr>
          <?php
               }
          }
          ?>
     </table>
</body>

</html>