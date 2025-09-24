<?php
    if(isset($_POST['submit'])){
        include_once('configuracoes/config.php');

        $email = $_POST['email'];

         $result = mysqli_query($conn, 'SELECT * FROM users WHERE email="'.$email.'"');
            if(mysqli_num_rows($result) > 0){
                header('Location: home.php');
            } else {
                echo "<script>alert('Invalid email');</script>";
            }
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
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Recovery</title>
    
</head>
<body style="background-color: lightgray;">
    <div class="container">
        <div class="row">
            <center>
                <form action="rec_login.php" method="POST">
                    <div class="col-4" style="background-color: white; margin-top: 30px; padding-bottom: 40px;">
                        <h3 class="poppins-light" style="padding-top: 50px;">
                            <strong>
                                Recover your login
                            </strong>
                        </h3>
                            <img src="img/logo_web_app-removebg-preview.png" style="width:50px ;height:50px;" alt="">
                        <p>
                         <br>

                            <div class="form-floating mb-3" style="width: 300px;">
                              <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
                              <label for="floatingInput">Email</label>
                            </div>

                            <button type="submit" name ='submit' id="login-button">
                                <i class="bi bi-arrow-right" id="arrow-icon"></i>
                            </button>
                        <br>
                        <p style="margin-top: 30px;">
                            <div class="new">
                                <a href="sign_up.php">Create account</a>
                            </div>
                        </p>
                </form>
            </center>
        </div>
    </div>
</body>
</html>