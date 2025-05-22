<?php
session_start();




$host="localhost";

$user="root";

$password="";

$db="sms";


$data=mysqli_connect($host,$user,$password,$db);

if($data===false){
    die("Connection error");
}

if(isset($_POST['apply']))
{
    $data_name=$_POST['name'];
    $data_email=$_POST['email'];
    $data_phone=$_POST['phone'];
    $data_message=$_POST['message'];
    $data_student_id=$_POST['student_id'];

    $sql="INSERT INTO admissions (name,email,phone,message,student_id) 
    VALUES ('$data_name','$data_email','$data_phone','$data_message','$data_student_id')";
 

 $result=mysqli_query($data,$sql);


 if ($result)
  {
     $_SESSION['messages']="your application submited successful";
     header("location:index.php");
  }
     else 
  {
     echo "Apply Failed";
  }

}


?>