<?php
    include_once('configuracoes/config.php');
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
    <title>Create event</title>
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
  <li class="nav-item">
    <a class="nav-link" href="tab_usuarios.php">
        <i class="bi bi-table" style="color:black"></i>
    </a>
  </li>
  <li>
    <img src="img/logo_web_app-removebg-preview.png" style="width:30px ;height:35px ;margin-right:5px ; padding-top:5px ;" alt="">
  </li>
</ul>
    <div class="container">
        <div class="row">
          <form action="sign_up.php" method="POST">
              <div class="col-8 mx-auto" style="background-color: white; margin-top: 30px; padding-bottom: 40px;">
                  <h3 class="poppins-light" style="padding-top: 50px;">
                      <strong class = 'd-block text-center'>
                          Create event
                      </strong>
                  </h3>
                  <div class="text-center">
                    <img src="img/logo_web_app-removebg-preview.png" class="rounded" style="width:50px ;height:50px;" alt="">
                  </div>

                  <div class="row">
                    <p>
                    
                      <div class="form-floating mb-3" style="width: 300px; margin-left: 70px;">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Name</label>
                      </div>
                      <div class="form-floating" style="width: 300px;">
                        <input type="date" class="form-control" name="password" id="floatingPassword" placeholder="Password" minlength="4" required>
                        <label for="floatingPassword">Date</label>
                      </div>
                    </p>
                  </div>
                      
                  <div class="row">
                    <p>
                      <div class="form-floating mb-3" style="width: 300px; margin-left: 70px;">
                        <input type="number" class="form-control" name="name" id="name" placeholder="Name" required>
                        <label for="floatingInput">Capability</label>
                      </div>
                      <div class="form-floating mb-3" style="width: 300px;">
                        <input type="time" class="form-control" name="number" id="number" placeholder="Number" required>
                        <label for="floatingInput">Hour</label>
                      </div>
                    </p>
                  </div>
                  <div class="row">
                    <a href="create_event2.php" class="text-end">
                      <button type="button" class="btn btn-secondary btn-sm me-3">
                        Next
                      </button>
                    </a>
                  </div>
                  
              </div>
          </form>
        </div>
    </div>
</body>
</html>

