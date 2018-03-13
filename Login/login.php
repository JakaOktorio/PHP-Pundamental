<?php
session_start();
$user = $_POST["inputusername"];
$pass = $_POST["inputPassword"];
//====================================
$dbuser = "admin@gmail.com";
$dbpass = "admin123";
//====================================
if($user == $dbuser && $pass == $dbpass){
    echo "<script>alert('Sucess');window.location = ('index.html')</script>";
}else{
   // if (done==0) { alert("Invalid login!");
    if(isset($_SESSION["salah"])){
        $_SESSION["salah"]++;
   }else{
        $_SESSION["salah"] = 1;
    }
   echo "<script>alert('Wrong password or username'); window.location = ('index.php')</script>";
}