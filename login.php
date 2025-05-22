<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f7f7f7;
        }
        .form-container {
            margin-top: 100px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .social-login {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .social-btn {
            width: 48%;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 form-container">
            <h2 class="text-center">Login</h2>

           <h4>
    
            <?php
            error_reporting(0);
            session_start();
            session_destroy();
            echo $_SESSION['loginMessage'];
           ?>
           
           </h4>
            <form action="login_check.php" method="POST">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <div class="social-login">
                    <a href="#" class="btn btn-danger social-btn"><i class="fab fa-google"></i> Google</a>
                    <a href="#" class="btn btn-primary social-btn"><i class="fab fa-facebook-f"></i> Facebook</a>
                </div>
            </form>
            <div class="text-center mt-3">
                <p>Don't have an account? <a href="#" id="show-signup">Sign Up</a></p>
            </div>
        </div>

        <div class="col-md-6 form-container" style="display: none;" id="signup-form">
            <h2 class="text-center">Sign Up</h2>
            <form>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" required>
                </div>
                <div class="form-group">
                    <label for="email-signup">Email address</label>
                    <input type="email" class="form-control" id="email-signup" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="password-signup">Password</label>
                    <input type="password" class="form-control" id="password-signup" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-success btn-block">Sign Up</button>
                <div class="social-login">
                    <a href="#" class="btn btn-danger social-btn"><i class="fab fa-google"></i> Google</a>
                    <a href="#" class="btn btn-primary social-btn"><i class="fab fa-facebook-f"></i> Facebook</a>
                </div>
            </form>
            <div class="text-center mt-3">
                <p>Already have an account? <a href="#" id="show-login">Login</a></p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.getElementById('show-signup').addEventListener('click', function() {
        document.querySelector('.form-container:nth-of-type(1)').style.display = 'none';
        document.getElementById('signup-form').style.display = 'block';
    });

    document.getElementById('show-login').addEventListener('click', function() {
        document.querySelector('.form-container:nth-of-type(1)').style.display = 'block';
        document.getElementById('signup-form').style.display = 'none';
    });
</script>
</body>
</html>
