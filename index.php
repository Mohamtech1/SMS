<?php
error_reporting(0);
session_start();
session_destroy();

 if($_SESSION['messages'])
 {
    $messages=$_SESSION['messages'];
    
    echo "<script type='text/javascript'>
      
    alert ('$messages');
    

    </script>";
 }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
</head>
<body>

<!--navbar-->
    <nav>
       <label class="logo">TISSEC</label>
       <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Cantact</a></li>
        <li><a href="#">Admission</a></li>
        <li><a href="login.php" class="btn btn-sucess">Login</a></li>
       </ul>
    </nav>

    <!--section 1-->

    <div class="section1">
        <label for="" class="img_text"> We are Bond to Teach</label>
        <img class="main_img" src="sch2.jpg" alt="">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="wimage" src="sch1.jpg" alt="">

            </div>

            <div class="col-md-8"> 
                <h1>Welcom to Tissec</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptates ut reiciendis atque 
                    accusantium hic dicta a corrupti neque quo, quaerat id. 
                    Praesentium sed sit doloremque temporibus! Minima, laboriosam a
                    met! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptatibus molestiae 
                    voluptas mollitia, eum hic aliquid earum libero nisi sapiente fuga perspiciatis ipsam consectetur 
                    neque similique corporis deleniti, commodi cupiditate? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit incidunt eius accusamus, libero, impedit magnam obcaecati quia molestiae maxime 
                    rerum sequi eligendi corporis natus vel sed, iure veniam odit? Quis.</p>

            </div>

        </div>

    </div>

    <center><h1>OUR TEACHERS</h1></center>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="tch" src="teach1.jpeg" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing 
                    elit. Accusantium, voluptatum asperiores doloremque  
                    consequuntur illo. Animi, ea!</p>

            </div>

            <div class="col-md-4">
            <img class="tch" src="teach2.webp" alt="">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing 
                    elit. Accusantium, voluptatum asperiores doloremque  
                    consequuntur illo. Animi, ea!</p>
            </div>

            <div class="col-md-4">
            <img class="tch" src="teach3.jpg" alt="">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing 
                    elit. Accusantium, voluptatum asperiores doloremque  
                    consequuntur illo. Animi, ea!</p>
            </div>

        </div>
    </div>

    <center><h1>Our Courses</h1></center>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="tch" src="course1.jpg" alt="">
                <h3>Lorem, ipsum dolor </h3>

            </div>

            <div class="col-md-4">
            <img class="tch" src="course2.jpg" alt="">
            <h3>Lorem, ipsum dolor sit </h3>
            </div>

            <div class="col-md-4">
            <img class="tch" src="course3.jpg" alt="">
            <h3>Lorem, ipsum dolor sit </h3>
            </div>

        </div>
    </div>

    <center class="adf"><h1>Admission Form</h1></center>

    <div align="center" class="admission_fm">


        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label for="" class="label_text">Student ID</label>
                <input class="input_fm" type="text" name="student_id" value="<?php $code = rand(000000,999999); echo $code; ?>" readonly>
            </div>
            
            <div class="adm_int">
                <label for="" class="label_text">Name</label>
                <input class="input_fm" type="text" name="name">
            </div>


            <div class="adm_int">
                <label for="" class="label_text">Email</label>
                <input class="input_fm" type="text" name="email">
            </div>


            <div class="adm_int">
                <label for="" class="label_text">Phone </label>
                <input class="input_fm" type="text" name="phone">
            </div>


            <div class="adm_int">
                <label for="" class="label_text">Message</label>
                <textarea id="text_area" name="message"></textarea>
            </div>


            <div class="adm_int">
                
                <input class="btn btn-primary" type="submit" value="Apply" id="submit" name="apply">

            </div>

        </form>

    </div> 

    <footer class="ft_txt">
        <h3>All @copyright reservered by Mohamtech Services </h3>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     
</body>
</html> 