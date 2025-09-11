<?php
    if(isset($_POST['submit'])){
        session_start();
        include_once('login_config.php');
        
    }
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
</head>
<body style="background-color: lightgray;">
    <div class="container">
        <div class="row">
            <center>
                <form action="index.php" method="POST">
                    <div class="col-4" style="background-color: white; margin-top: 30px; padding-bottom: 40px;">
                        <h3 class="poppins-light" style="padding-top: 50px;">
                            <strong>
                                Sign in
                            </strong>
                        </h3>
                            
                        <p>
                         <br>                                                                                                                                                               

                            <div class="form-floating mb-3" style="width: 300px;">
                              <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
                              <label for="floatingInput">Email</label>
                            </div>

                            <div class="form-floating" style="width: 300px;">
                              <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                              <label for="floatingPassword">Password</label>
                            </div>


                        <br>

                        <button class="btn btn-secondary google" id="google">
                            <i class="bi bi-google">
                            </i>
                        </button>
                        <button class="btn btn-secondary facebook" id="face">
                            <i class="bi bi-facebook">
                            </i>
                        </button>
                        <button class="btn btn-secondary github" id="git">
                            <i class="bi bi-github">
                            </i>
                        </button>
                        <br>

                        <button type="submit" name ='submit' id="login-button">
                            <i class="bi bi-arrow-right" id="arrow-icon"></i>
                        </button>

                        <p style="margin-top: 30px;">
                            <div class="new">
                                <a href="create_acc.php">Create account</a>
                            </div>
                            <div class="new">
                                <a href="rec_login.php">Can't sign in?</a>
                            </div>
                </div>
                </form>
            </center>
        </div>
    </div>
</body>
</html>