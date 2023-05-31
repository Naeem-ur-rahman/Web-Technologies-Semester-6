<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title = "Form PHP SELF"; echo $title; ?></title>
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

	
footer{
	text-align:center;
	height:10vh;
	display:flex;
	justify-content:center;
	align-items:center;
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
    <h1 align="center">Registeration Form</h1>
    <form action="action.php" method="post">
        <div class="grid">
            <label for="userid">User Id :</label>
            <input type="text" name="userid" id="userid" placeholder="Enter your Id" required pattern=".{5,12}">
        </div>
        <div class="grid">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required pattern=".{7,12}">
        </div>
        <div class="grid">
            <label for="name">Name :</label>
            <input type="text" id="name" name="name" placeholder="Enter your Name" required pattern="[A-Za-z\s]{3,}">
        </div>
        <div class="grid">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" placeholder="Enter your Address">
        </div>
        <div class="grid">
            <label for="country">Country:</label>
            <select name="country" id="country" required>
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
            <input type="text" id="zipcode" name="zipcode" placeholder="Enter your Zip Code" required pattern="[0-9]{3,}">
        </div>
        <div class="grid">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your Email" required>
        </div>
        <div>
            <label for="sex">Sex:</label>
            <input type="radio" id="male" name="sex" value="male" required>
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
            <input type="submit" id="submit">
        </div>
    </form>
<footer>
<?php 
$year = date('Y');
echo "<p>Copy Rights &copy; $year | All Rights Reserved<p/>"; 
?>
</footer>
</body>

</html>