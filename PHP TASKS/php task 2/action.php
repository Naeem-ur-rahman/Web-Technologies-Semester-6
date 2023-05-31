<style>
body{
background-color:#373B61;
color:white;
line-height:2.5rem;
font-size:2rem;
}
</style>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
echo "Sucessfull submit <br> Your Data !<br><br><br>";
$userid = $_POST['userid'];
$password = $_POST['password'];
$name = $_POST['name'];
$address = $_POST['address'];
$country = $_POST['country'];
$zipcode = $_POST['zipcode'];
$email = $_POST['email'];
$sex = $_POST['sex'];

echo "Thanks Mr. ".$name." for Submitting the Form <br>";
echo "Your User Id is : ".$userid."<br>";
echo "Your username : ".$email."<br>";
echo "Your Your Address : ".$address."<br>";
echo "Your Country : ".$country."<br>";
echo "Your zip code : ".$zipcode."<br>";
echo "Your password : ".$password."<br>";
echo "Your sex : ".$sex."<br>";

if(isset($_POST['english'])){
$english = $_POST['english'];
echo "English Speaker <br>";
}

if(isset($_POST['nonenglish'])){
$nonenglish = $_POST['nonenglish'];
echo "Non English Speaker <br>";
}

$about = $_POST['about'];
echo "About : ".$about."<br>";
}

?>