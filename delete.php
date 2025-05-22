<?php

session_start();

$host="localhost";
$user="root";
$password="";
$db="sms";

$data=mysqli_connect($host,$user,$password,$db);
if($_GET['student_id'])
{
    $user_id=$_GET['student_id'];
    $sql="DELETE FROM user WHERE id='$user_id'";
    $result=mysqli_query($data,$sql);

    if($result){

        $_SESSION['message']='Student Delected Successfully';
        header("location:view_student.php");
    }
}


if($_GET['students_id'])
{
    $user_id=$_GET['students_id'];
    $sql="DELETE FROM admissions WHERE phone='$user_id'";
    $result=mysqli_query($data,$sql);

    if($result){

        $_SESSION['message']='Student Delected Successfully';
        header("location:admission.php");
    }
}

?>