<?php

if (isset($_POST['submit'])) {
    session_start();

    if (isset($_POST['userid'])) {
        $userid = $_POST['userid'];
        $_SESSION['userid'] = $userid;
        if(!preg_match("|^\d{5,12}$|",$userid)){
            $message[] = 'Please Enter digits only in user id in range (5,12)';
        }
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        $_SESSION['password'] = $password;
        if(!preg_match("|/w{7,12}@|",$password)){
            $message[] = 'Please include @ in password and range is (8,12)';
        }
    }
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $_SESSION['name'] = $name;
    }
    if (isset($_POST['address'])) {
        $address = $_POST['address'];
        $_SESSION['address'] = $address;
    }
    if (isset($_POST['country'])) {
        $country = $_POST['country'];
        $_SESSION['country'] = $country;
    }
    if (isset($_POST['zipcode'])) {
        $zipcode = $_POST['zipcode'];
        $_SESSION['zipcode'] = $zipcode;
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $_SESSION['email'] = $email;
    }
    if (isset($_POST['sex'])) {
        $sex = $_POST['sex'];
        $_SESSION['sex'] = $sex;
    }
    if (isset($_POST['english'])) {
        $english = $_POST['english'];
        $_SESSION['english'] = $english;
    }
    if (isset($_POST['nonenglish'])) {
        $nonenglish = $_POST['nonenglish'];
        $_SESSION['nonenglish'] = $nonenglish;
    }
    if (isset($_POST['about'])) {
        $about = $_POST['about'];
        $_SESSION['about'] = $about;
    }
    // header('location:action.php');
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title = "Form PHP SELF";
            echo $title; ?></title>
    <style>
        :root {
            --bg-color: #1f242d;
            --second--bg-color: #323946;
            --text-color: #fff;
            --main-color: #0ef;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Popins';
        }

        .message {
            position: sticky;
            top: 0;
            max-width: 1200px;
            background-color: white;
            padding: 1rem;
            display: flex;
            align-items: center;
            gap: .5rem;
            justify-content: space-between;
            color: black;
        }

        .message span {
            font-size: 1.3rem;
        }

        .message a {
            font-size: 1.5rem;
            color: red;
            cursor: pointer;
        }

        .message a:hover {
            color: black;
        }

        footer {
            text-align: center;
            height: 10vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            padding: 2rem;
        }

        div {
            margin: 1rem 0;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        body {
            background-color: var(--second--bg-color);
            color: var(--text-color);
            padding-left: 10%;
        }

        input,
        select,
        textarea {
            background: var(--bg-color);
            color: var(--text-color);
            padding: 0.1rem;
            border: none;
            border-radius: 0.2rem;
            font-size: 1.2rem;
            padding-left: 1%;
            height: 40px;
            margin-left: 5px;
        }

        label {
            font-size: 1.2rem;
            display: inline-block;
            min-width: max-content;
            width: 10vw;
            text-align: end;
        }

        textarea {
            width: 800px;
            height: 30vh;
            padding: 1rem;
        }

        .align-label {
            width: fit-content;
            margin-left: 5px;
        }

        #submit {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            height: fit-content;
        }

        @media screen and (width<820px) {
            .grid {
                display: grid;
                padding-right: 10%;
                gap: .4rem;
            }

            textarea {
                width: auto;
            }

            label {
                text-align: start;
            }
        }

        @media screen and (width<440px) {
            .grid {
                display: grid;
                padding-right: 10%;
                gap: .4rem;
            }
        }
    </style>
</head>

<body>
    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '
          <div class="message">
               <span>' . $message . '</span>
               <a onclick="this.parentElement.remove();">Click to cancel</a>
          </div>
          ';
        }
    }
    ?>
    <h1 style="text-align: center;">Registeration Form</h1>
    <form action="" name="form1" method="post">
        <div class="grid">
            <label for="userid">User Id :</label>
            <input type="text" name="userid" id="userid" placeholder="Enter your Id">
        </div>
        <div class="grid">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">
        </div>
        <div class="grid">
            <label for="name">Name :</label>
            <input type="text" id="name" name="name" placeholder="Enter your Name">
        </div>
        <div class="grid">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" placeholder="Enter your Address">
        </div>
        <div class="grid">
            <label for="country">Country:</label>
            <select name="country" id="country">
                <option value="">-----Select a Country-----</option>
                <option value="Pakistan">Pakistan</option>
                <option value="India">India</option>
                <option value="Canada">Canada</option>
                <option value="Japan">Japan</option>
                <option value="Korea">Korea</option>
                <option value="Neatherland">Neatherland</option>
                <option value="Russia">Russia</option>
            </select>
        </div>
        <div class="grid">
            <label for="zipcode">Zip Code:</label>
            <input type="text" id="zipcode" name="zipcode" placeholder="Enter your Zip Code">
        </div>
        <div class="grid">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your Email">
        </div>
        <div>
            <label for="sex">Sex:</label>
            <input type="radio" id="male" name="sex" value="male">
            <label for="male" class="align-label">Male</label>
            <input type="radio" id="female" name="sex" value="female">
            <label for="female" class="align-label">Female</label>
        </div>
        <div>
            <label for="">Language:</label>
            <input type="checkbox" id="english" name="english">
            <label for="english" class="align-label">English</label>
            <input type="checkbox" id="nonenglish" name="nonenglish">
            <label for="nonenglish" class="align-label" value="Non English">Non English</label>
        </div>
        <div class="grid">
            <label for="about">About:</label>
            <textarea id="about" name="about" placeholder="Enter your thoughts"></textarea>
        </div>
        <div class="grid">
            <label for=""></label>
            <input type="submit" id="submit" name="submit">
        </div>
    </form>
    <footer>
        <?php
        $year = date('Y');
        echo "<p>Copy Rights &copy; $year | All Rights Reserved<p/>";
        ?>
    </footer>
</body>
<!-- <script>
function valid(){
<?php
// $userid = $_GET["userid"];
// if(!preg_match("|^[0-9]{5,12}$|",$userid)){
// echo "Invalid Input";
// return false;
// }
?>
  //let x = document.forms["form1"]["username"].value;
  //if (x == "") {
    //alert("Name must be filled out");
    //return false;
//   }
}
</script> -->

</html>