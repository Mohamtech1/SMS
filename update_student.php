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

$id=$_GET['student_id'];

$sql="SELECT * FROM user WHERE id='$id' ";


$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();

    
    if(isset($_POST['update']))
    {
    $username=$_POST['name'];
    $useremail=$_POST['email'];
    $userphone=$_POST['phone'];
    $userpassword=$_POST['password'];
    $usertype="student";

    $query="UPDATE user SET username='$username',
    email='$useremail', phone='$userphone', password='$userpassword' WHERE id='$id'";

    $result2=mysqli_query($data,$query);
    
   

    if ($result2) 
{
        echo "<script> alert('Data Uploaded Successfully');  </script>";
        header("location:view_student.php");
    

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
   <h1>Update Student </h1>

    <div class="div_deg">

        <form action="#" method="POST">
        <div>
            <label for="">Username</label>
            <input type="text" name="name" value="<?php echo "{$info['username']}";?>">
        </div>

        <div>
            <label for="">Email</label>
            <input type="text" name="email" value="<?php echo "{$info['email']}";?>">
        </div>

        <div>
            <label for="">Phone</label>
            <input type="number" name="phone" value="<?php echo "{$info['phone']}";?>">
        </div>

        <div>
            <label for="">Password</label>
            <input type="text" name="password" value="<?php echo "{$info['password']}";?>">
        </div>

        <div>
            
            <input type="submit" name="update" value="Update" class="btn btn-success">
        </div>

            </form>
        </div>
        </center> 
    </div>
</body>
</html>



