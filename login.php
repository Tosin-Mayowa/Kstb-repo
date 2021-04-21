<?php include "db.php"; ?>
<?php include "function.php"; ?>
<?php
if (isset($_POST['login'])) {
    logIn();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
     <header class="header">
        <nav class="nav">
            <div class="nav-header">
                <h2 class="logo-h"><img src="./logo3.png" alt="school logo" class="imag">KSTB</h2>
                <button class="nav-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <ul class="links">
                <li class="link1 lin">
                    <a href="sign_up.php#bans" class="single-link">home</a>
                </li>
                <li class="link2 lin">
                    <a href="" class="single-link">about</a>
                </li>
                <li class="link3 lin">
                    <a href="" class="single-link">eligibility</a>
                </li>
                <li class="link4 lin">
                    <a href="sign_up.php#myform" class="single-link">apply</a>
                </li>
                <li class="link5 lin">
                    <a href="login.php" class="single-link">login</a>
                </li>
            </ul>
        </nav>
    </header> 
<section class="alls">
<form action="login.php" method="post" >
        <div class="logcont">
            <div class="log1">
                <label for="accel" class="user">email</label>
                <br>
                <input type="email" placeholder="dummy@dummy.com" name="email" id="accel" class="inp">
            </div>
            <br>
            <br>
            <div class="log2">
                <label for="peace" class="user">password</label>
                <br>
                <input type="password" name="password" id="peace" class="inp">
            </div>
            <br>
            <br>
            <div class="lgbtn">
                <a href="apply.php"><input type="submit" name="login" value="login" class="sup"></a>
            </div>
        </div>
    </form>
</section>
</body>

</html>