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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
    <h1>Add Teacher</h1>
   


    </center>
</body>
</html>

