<style>
     body {
          background-color: #373B61;
          color: white;
          line-height: 2.5rem;
          font-size: 2rem;
     }
</style>

<?php
session_start();
echo "Sucessfull submit <br> Your Data !<br><br><br>";
echo '<a href="destroy.php">Destroy Session</a><br>';

$userid = '';
$password = '';
$name = '';
$address = '';
$country = '';
$zipcode = '';
$email = '';
$sex = '';


if (isset($_SESSION['userid'])) {
     $userid = $_SESSION['userid'];
}
if (isset($_SESSION['password'])) {
     $password = $_SESSION['password'];
}
if (isset($_SESSION['name'])) {
     $name = $_SESSION['name'];
}
if (isset($_SESSION['address'])) {
     $address = $_SESSION['address'];
}
if (isset($_SESSION['country'])) {
     $country = $_SESSION['country'];
}
if (isset($_SESSION['zipcode'])) {
     $zipcode = $_SESSION['zipcode'];
}
if (isset($_SESSION['email'])) {
     $email = $_SESSION['email'];
}
if (isset($_SESSION['sex'])) {
     $sex = $_SESSION['sex'];
}

echo "Thanks Mr. " . $name . " for Submitting the Form <br>";
echo "Your User Id is : " . $userid . "<br>";
echo "Your password : " . $password . "<br>";
echo "Your username : " . $email . "<br>";
echo "Your Your Address : " . $address . "<br>";
echo "Your Country : " . $country . "<br>";
echo "Your zip code : " . $zipcode . "<br>";
echo "Your sex : " . $sex . "<br>";

if (isset($_SESSION['english'])) {
     $english = $_SESSION['english'];
     echo "English Speaker <br>";
}

if (isset($_SESSION['nonenglish'])) {
     $nonenglish = $_SESSION['nonenglish'];
     echo "Non English Speaker <br>";
}
if (isset($_SESSION['nonenglish'])) {
     $about = $_SESSION['about'];
     echo "About : " . $about . "<br>";
}
?>