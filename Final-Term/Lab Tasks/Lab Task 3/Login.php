<?php
session_start();

if(isset($_SESSION["user"])){
    header("Location:dashboard.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["user"];
    $pass=$_POST["pass"];

    if($user=="admin" && $pass=="1234"){
        $_SESSION["user"]=$user;
        header("Location:dashboard.php");
        exit();
    }
    else{
        $error="Invalide username or password";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            LOGIN
        </title>
    </head>
    <body>
    <form method="post">
        Username:
        <center>
            <input type="text" name="user" value="<?php echo $user;?>">
            <?php echo $nameerror; ?>
        </center>
        Password:
        <center>
            <input type="text" name="pass" value="<?php echo $pass;?>">
            <?php echo $passerror; ?>
        </center>
        <center>
            <input type="submit" name="login" value="LOGIN">
        </center>
    </form>
    </body>
</html>