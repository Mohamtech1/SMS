<?php

session_start();

if(!isset($_SESSION['email']))
{
    header("location:login.php");
}

elseif($_SESSION['usertype']=="admin")
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

    <?php include 'student_css.php' ?>

   </head>
<body>
   <?php include 'student_sidebar.php' ?>

   <div class="content">
    <h1>INFORMATION</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing 
        elit. Repellat ducimus quod distinctio repellendus 
        similique voluptatibus exercitationem debitis a ab 
        animi perferendis, autem sint? Eius nobis laudantium 
        porro maxime reprehenderit adipisci.</p>
   </div>
</body>
</html>

