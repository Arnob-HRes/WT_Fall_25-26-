<!DOCTYPE html>
<html>
    <head>
        <title>
            Student Login
        </title>
    </head>
    <style>
        form{
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px;
            width: 200px;
            height: auto;
        }
    </style>
    <body>
        <center>
        <form>
            <center>LOGIN</center>
            <br>USERNAME:
            <br><input type="text" name="I1">
            <br>PASSWORD:
            <br><input type="text" name="I2">
            <br><br>
            <center><input type="submit" value="LOGIN"></center>
        </form>
            <?php
            function go(){
             $user=$_GET["I1"];
             $Pass=$_GET["I2"];
             if($user=="" && $Pass==""){
                echo"GIVE INPUT";
             }
             if($user=="ARNOB" && $Pass=="1234"){
                echo"Successful";
             }
             else{echo"INVALID USERNAME OR PASSWORD"; return false;}
            }
            ?>
        </center>
    </body>
</html>