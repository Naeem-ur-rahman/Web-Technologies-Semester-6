<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form Php</title>
     <style>
          *{
               margin: 0;
               padding: 0;
          }
          form {
               padding: 30px;
               display: flex;
               flex-direction: column;
               align-items: center;
               gap: 0.1rem;
          }

          footer {
               background-color: black;
               color: white;
               height: 50px;
               display: flex;
               justify-content: center;
               align-items: center;
               text-align: center;
          }

          main {
               height: 60vh;
          }
          small{
               display:flex;
               background-color: green;
               color:white;
               padding : 0 10%;
               word-wrap: wrap;
               overflow-x:hidden;
          }
     </style>
</head>

<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
     $name = $_POST['name'];
     $email = $_POST['email'];
     echo "<small>";
     echo "Welcome Mr. $name";
     echo '<br>';
     echo "Your Email is : $email";
     echo "</small>";
}

?>
     <form action="index.php" method="post">
          <label for="name">Name </label>
          <input type="text" id="name" name="name" placeholder="Enter your Name" required>
          <br>
          <label for="email">Email </label>
          <input type="email" id="email" name="email" placeholder="Enter your Email" required>
          <br>
          <input type="submit">
     </form>
     <main>

     </main>
     <footer>
          <?php 
          $year = date('Y');
          echo "<p>Copyrights &copy; $year | All rights Reserved</p>"
          
          ?>
     </footer>
</body>

</html>