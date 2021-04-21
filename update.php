<?php include "db.php"; ?>
<?php include "function.php"; ?>
<?php
if (isset($_POST['reset'])) {
    upDate();
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

    <form action="login.php" method="post">
        <div class="uptod">
            <div class="six">
                        <label for="peace" class="user">new password</label>
                        <br>
                        <input type="password" name="password" id="peace" class="conf">
                    </div>
            <br>
            <br>
            <div class="log2">
                <label for="peace" class="user">confirm password</label>
                <br>
                <input type="password" name="conpassword" id="pe" class="conf">
            </div>
            <br>
            <br>
            <div class="lgbtn">
                <a href="sign_up.php"><input type="submit" name="reset" value="login" class="conf"></a>
            </div>
        </div>
    </form>
</body>

</html>