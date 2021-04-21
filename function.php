<?php include "db.php";

function create(){
    global $connection;
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $othernames = $_POST['other'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    if($password !== $rpassword) {
        die("PASSWORD NOT MATCHED");
    }
    if ($othernames == null || $email== null) {
      die("ALL FIELDS MUST BE FIELD");
    }
    if ($firstname == null || $number== null) {
      die("ALL FIELDS MUST BE FIELD");
    }
    if ($surname == null || $password== null) {
      die("ALL FIELDS MUST BE FIELD");
    }
    $firstname = mysqli_real_escape_string($connection, $firstname);
    $surname = mysqli_real_escape_string($connection, $surname);
    $othernames = mysqli_real_escape_string($connection, $othernames);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    $hashFormat = "$2y$10$";
    $salt = "iwillmakesurethehackersdonothaveacess15";
    $hashSalt = $hashFormat . $salt;
    $password = crypt($password, $hashSalt);

    $query = "INSERT INTO users(firstname, surname, othernames, email, number, password)";
    $query .= "VALUE('$firstname', '$surname', '$othernames', '$email', '$number', '$password')";
    $result = mysqli_query($connection, $query);
    if ($result) {
        echo  '<div class="signupmsg">
        <p class="mesg">You have sign up successfully, kindly login with your email and password.</p>
       <a href="login.php"> <input type="submit" name="login" value="login" class="log"></a>
    </div>';
    }else {
        die("SIGN UP FAILED");
    }
}

function logIn() {
    global $connection;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_row($result);

    if(in_array($email, $row)) {
        echo "Login successful";
    }elseif (in_array($password, $row)) {
        echo '<div class="dashb">
        <p class="dashmsg">Login successful</p>
        <a href="dashboard.php">click here</a>
        </div>';
    }else {
        die("INVALID EMAIL");
    }
}

function upDate() {
    global $connection;
    $newpassword = $_POST['password'];
    $conpassword = $_POST['conpassword'];
    if ($newpassword !== $conpassword) {
        die("ERROR");
    }
    $query = "UPDATE users SET";
    $query .= "password = '$newpassword' ";
    $result = mysqli_query($connection, $query);
    if($result) {
        echo "successful";
    }

}