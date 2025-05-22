<?php
error_reporting(0); 
session_start();

$host="localhost";

$user="root";

$password="";

$db="sms";


$data=mysqli_connect($host,$user,$password,$db);


if($data===false)
{
    die("connection error");
}

 

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['email'];
    $pass = $_POST['password'];

    $sql="select * from user where email='".$name."' AND 
    password='".$pass."' ";

    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);


    
    if($row["usertype"]=="student")
    {

        $_SESSION['email']=$name;
        $_SESSION['usertype']="student";
        header("location:studenthome.php");
    }

    elseif($row["usertype"]=="admin")
    {
        $_SESSION['email']=$name;
        $_SESSION['usertype']="admin";
        header("location:adminhome.php");
    }

    else{

        
        $message= ("email or password do not match");
        $_SESSION['loginMessage']=$message;

        header("location:login.php");
    }

    
}


?>
