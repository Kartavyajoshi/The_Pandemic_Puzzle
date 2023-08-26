<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "doctor";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['pass']) && isset($_POST['user-name']) && isset($_POST['sel'])){
        $pass = $_POST['pass'];
        $user = $_POST['user-name'];
        $id = $_POST['sel'];

            if($id == "Doctor"){
                $sql = "SELECT 'Username' FROM `docinfo` WHERE `Password` = '$pass'";
                $result = mysqli_query($conn, $sql);
                $flag = 0;
                while($row = mysqli_fetch_assoc($result)){
                    if($user == $row['Username'])
                        $flag = 1;
                    }
                    if($flag == 1){
                    echo "Invalid Username and Password.";
                    }
             
            }else if($id == "Hospital"){
                $sql = "SELECT 'Username' FROM `hosinfo` WHERE `Password` = '$pass'";
                $result = mysqli_query($conn, $sql);
                $flag = 0;
                while($row = mysqli_fetch_assoc($result)){
                    if($user == $row['Username'])
                        $flag = 1;
                    }
                    if($flag == 1){
                    echo "Invalid Username and Password.";
                    }
            }else{
                $sql = "SELECT 'Username' FROM `patinfo` WHERE `Password` = '$pass'";
                $result = mysqli_query($conn, $sql);
                $flag = 0;
                while($row = mysqli_fetch_assoc($result)){
                    if($user == $row['Username'])
                        $flag = 1;
                    }
                    if($flag == 1){
                    echo "Invalid Username and Password.";
                    }
                
            }
        }
        }
    }else{
    die("Unable to connect" . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Login.css">
  </head>
    <title>Login</title>
</head>
<body>
    <div class="container">

        <div class="heading-container">
            <h1>Log in</h1>
        </div>

        <form action="/DAIICT/landing.php" method="post" >
        <div class="form-container">
            <div class="drop">
                <label for="drop">Account type: </label>
                <select id="drop" name="sel" onchange="identity()" >
                    <option value="">Choose Identity</option>
                    <option value="Hospital">Hospital</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Patient">Patient</option>
                </select>
            </div>
           
            <label for="user">Enter username: </label>
           <input type="user" name="user-name" id="user-id" placeholder="Username" ><br>
           <label for="password">Enter Password</label>
            <input type="password" name="pass" id="user-pass" placeholder="Password" minlength="8" maxlength="12" onshow="Animation" >
            <a href="homepage.php" ><input type="submit" value="Submit" id="submit"  href="SignUp.php"  ></a>
        </div>
        </form>

        <div class="footer-container">
            <p id="footer">By Continuing, you agree to  <a href="_" target="_blank">terms</a> <br>and acknowledge you've read our <a href="-">privacy policy</a></p>
        </div>
        
    </div>

</body>
</html>
