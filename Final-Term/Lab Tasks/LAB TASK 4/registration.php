<?php
 
include "db.php";
 
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    $phone_number=$_POST["phone"];
    $nid=$_POST["nid"];
    $birth=$_POST["bd"];
    $address=$_POST["address"];

    if(empty($username)||empty($password)||empty($email)||empty($phone_number)||empty($nid)||empty($birth)||empty($address)){
        $error="All the field must be fill up";
    }

    else{
        $hassPassword=password_hash($password,PASSWORD_DEFAULT);
        $sql="INSERT INTO users(username,password,email,PhoneNumber,nid,Birth,Address) VALUES ('$username','$hassPassword','$email','$phone_number','$nid','$birth','$address')";
        if($conn->query($sql)){
            $success="Registration Complete you can do the login";
        }
        else{
            $error="Error: ".$conn->error;
        }
    }

 }
 
 
?>

<!DOCTYPE html>
<head>
    <title>User Registration</title>
</head>
<style>
    #f1{
        border: 2px solid black;
        border-radius: 2px;
        width: 250px;
        height: auto;
        padding: 10px;
    }
</style>
<body>
    <center>
    <form method="post" action="" id="f1">
        <center>
            <h2>Registration</h2><br><br>
        </center>
        Username: <br><input type="text" name="username"><br><br>
        Password: <br><input type="password" name="password"><br><br>
        Email: <br><input type="email" name="email"><br><br>
        Phone Number: <br><input type="text" name="phone"><br><br>
        Netinal ID: <br><input type="number" name="nid"><br><br>
        Birth Date: <br><input type="date" name="bd"><br><br>
        Address: <br><input type="text" name="address"><br><br>
        <input type="submit" value="Register">
    </form>
    <p style="color:green;"><?php echo $success;?></p>
    <p style="color:red;"><?php echo $error;?></p>
    </center>
    
</body>
</html>