<?php

session_start();

if(!isset($_SESSION['email']))
{

    header("location:login.php");
}

elseif($_SESSION['usertype']=="student")
{
    header("location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="sms";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_student']))
{
    $username=$_POST['name'];
    $useremail=$_POST['email'];
    $userphone=$_POST['phone'];
    $userpassword=$_POST['password'];
    $usertype="student";

    $check= "SELECT * FROM user WHERE email = '$useremail'";
    
    $check_user=mysqli_query($data,$check);
    
    $row_count=mysqli_num_rows($check_user);


    if($row_count==1)
    {
        
        echo "<script> alert('Email Already Exist, Try another one');  </script>";

    }

    else
    {

    
    $sql="INSERT INTO user(username,email,phone,usertype,password) 
    VALUES ('$username','$useremail','$userphone','$usertype','$userpassword')";


$result=mysqli_query($data,$sql);

if ($result) 
{
    echo "<script> alert('Data Uploaded Successfully');  </script>";
}

else 
{
    echo "Upload Failed";
}

    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        label 
        {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }


        .div_deg
        {
            background-color: skyblue;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>
    
    
    <?php 
   
  include 'admin_css.php';
   ?>

   </head>
<body>
   
   <?php 
   
   include 'admin_sidebar.php';
   ?>

   <div class="content">
   <center>
   <h1>Add Student </h1>

    <div class="div_deg">

        <form action="#" method="POST">
        <div>
            <label for="">Username</label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>

        <div>
            <label for="">Phone</label>
            <input type="number" name="phone">
        </div>

        <div>
            <label for="">Password</label>
            <input type="text" name="password">
        </div>

        <div>
            
            <input type="submit" name="add_student" value="Add Student" class="btn btn-primary">
        </div>

            </form>
        </div>
        </center> 
    </div>
</body>
</html>

