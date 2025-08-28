<?php

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Config</title>
    
</head>
<body style="background-color: lightgray;">
    <ul class="nav justify-content-end" style="background-color: white;">
  <li class="nav-item">
    <a class="nav-link" href="index.php" style="color: black;">
        <i class="bi bi-person-circle"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="configuracao_user.php">
        <i class="bi bi-gear-fill" style="color: black;"></i>
    </a>
  </li>
  <li class="nav-item">
    <a href="home.php" class="nav-link">
        <i class="bi bi-house-door-fill" style="color: black;"></i>
    </a>
  </li>
</ul>
    <div class="container">
        <div class="row">
            <center>
                    <div class="col-4" style="background-color: white; margin-top: 30px; padding-bottom: 40px;">
                        <h3 class="poppins-light" style="padding-top: 50px;">
                            <strong>
                                Config
                            </strong>
                        </h3>
                        <a href="edit_cadastro.php">
                            <button type="button" class="btn btn-secondary">
                                Change Password
                            </button>
                        </a>
                        <br><br>
                        <a href="delete_account.php">
                            <button type="button" class="btn btn-secondary" id="delete_account" name = 'delete_account'>
                                Delete Account
                            </button>
                        </a>
                    </div>
                </div>
            </center>
        </div>
    </div>
</body>
</html>
