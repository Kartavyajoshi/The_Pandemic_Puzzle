<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "doctor";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $password = $_POST['pass'];
        $cpassword = $_POST['re-pass'];
        $exists = false;
        if(($password == $cpassword) && $exists == false){
            $name = $_POST['name'];
            $email  = $_POST['email'];
            $username = $_POST['user-name'];
            $doc = $_POST['docID'];
            $hos = $_POST['hosID'];
            if($doc){
                $sql = "INSERT INTO `docinfo` (`Sr. No`, `Name`, `Username`, `Email`, `Password`, `DocID`, `Time`) VALUES ('', '$name',  '$username', '$email', '$password', '$doc', current_timestamp())";
                $result = mysqli_query($conn, $sql);
            }else if($hos){
                $sql = "INSERT INTO `hosinfo` (`Sr. No`, `Name`, `Username`, `Email`, `Password`, `HosID`, `Time`) VALUES ('', '$name',  '$username', '$email', '$password', '$hos', current_timestamp())";
                $result = mysqli_query($conn, $sql);
            }else{
                $pat = rand(10000000, 99999999); 
                $sql = "INSERT INTO `patinfo` (`Sr. No`, `Name`, `Username`, `Email`, `Password`, `PatID`, `Time`) VALUES ('', '$name',  '$username', '$email', '$password', '$pat', current_timestamp())";
                $result = mysqli_query($conn, $sql);
            }
        }
        else{
            echo "Incorrect Password";
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
    <link rel="stylesheet" href="CSS/SignUp.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
  </head>
    <title>SignUp</title>
</head>
<body>
    <div class="container">

        <div class="heading-container">
            <h1>Sign up now</h1>
        </div>

        <form action="/DAIICT/homepage.php" method="post" >
        <div class="form-container">
            <div class="drop">
                <label for="drop">Account type: </label>
                <select id="drop" onchange="identity()" >
                    <option value="">Choose Identity</option>
                    <option value="Hospital">Hospital</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Patient">Patient</option>
                </select>
            </div>
            <!-- <label visibility="false" id="docLab" for="docID">Enter Doctor ID: </label> -->
            <input type="hidden" name="docID" id="docID" placeholder="Doctor ID" ><br>
            <!-- <label for="hosID">Enter Hospital ID: </label> -->
            <input type="hidden" name="hosID" id="hosID" placeholder="Hospital ID"><br>
            <label for="name">Enter name: </label>
            <input type="text" name="name" id="email" placeholder="Enter Name"><br>
            <label for="email">Enter email: </label>
            <input type="email" name="email" id="email" placeholder="E-mail"><br>
            <label for="user">Enter username: </label>
           <input type="user" name="user-name" id="user-id" placeholder="Username" ><br>
           <label for="password">Enter Password</label>
            <input type="password" name="pass" id="user-pass" placeholder="Password" minlength="8" maxlength="12" onshow="Animation" >
            <label for="Repassword">Renter password: </label>
           <input type="text" name="re-pass" id="Repassword" placeholder="Re-enter Password" ><br>
            <input type="submit" value="Submit " class="submit">
        </div>
        </form>

        <div class="footer-container">
            <p id="footer">By Continuing, you agree to  <a href="_" target="_blank">terms</a> <br>and acknowledge you've read our <a href="-">privacy policy</a></p>
        </div>
        
    </div>

    <script>

        function identity()
        {
            var s1 = document.getElementById("drop").value;
            
            if(s1 === "Doctor"){

                document.getElementById("hosID").setAttribute("type","hidden");
               document.getElementById("docID").setAttribute("type","text");
            }
            else if(s1==="Hospital"){
                document.getElementById("docID").setAttribute("type","hidden");
                document.getElementById("hosID").setAttribute("type","text");
            }
            else{
                document.getElementById("docID").setAttribute("type","hidden");
                document.getElementById("hosID").setAttribute("type","hidden");
            }


        }
       

    </script>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->

</body>
</html>