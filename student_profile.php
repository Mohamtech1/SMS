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

$host="localhost";
$user="root";
$password="";
$db="sms";

$data=mysqli_connect($host,$user,$password,$db);



$name=$_SESSION['email'];

$sql="SELECT * FROM user WHERE email='$name' ";


$result=mysqli_query($data,$sql);

$info=mysqli_fetch_assoc($result);

    
    if(isset($_POST['update_profile']))
    {
    $username=$_POST['name'];
    $useremail=$_POST['email'];
    $userphone=$_POST['phone'];
    $userpassword=$_POST['password'];
    $usertype="student";

   

    $query="UPDATE user SET username='$username',
    email='$useremail', phone='$userphone', password='$userpassword' WHERE email='$useremail'";

    $result2=mysqli_query($data,$query);
    
   

    if ($result2) 
{
        echo "<script> alert('Data Updated Successfully');  </script>";
        
    

}


}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include 'student_css.php' ?>


    <style>
        label {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .div_deg
        {
            background-color: skyblue;
            width: 500px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>

   </head>
<body>
   <?php include 'student_sidebar.php' ?>

   
<div class="content">

   <center>
    <h1>Update Profile</h1>
    <form action="#" method="POST">
<div class="div_deg">
    <div >
        <label for="">Name</label>
        <input type="text" name="name" 
        value="<?php echo "{$info['username']}"; ?>">
    </div>

    <div>
        <label for="">Email</label>
        <input type="email" name="email" 
        value="<?php echo "{$info['email']}"; ?>" >
    </div>

    

    <div>
        <label for="">Phone</label>
        <input type="number" name="phone" 
        value="<?php echo "{$info['phone']}"; ?>">
    </div>

    <div>
        <label for="">Password</label>
        <input type="text" name="password" 
        value="<?php echo "{$info['password']}"; ?>">
    </div>

    <div>
        
        <input class="btn btn-success" type="submit" name="update_profile">
    </div>




</div>

    </form>
</center>

   </div>
</body>
</html>

