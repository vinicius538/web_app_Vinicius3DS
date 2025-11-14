<?php
  include_once('configuracoes/config.php');
  include_once('configuracoes/criar_evento.php');

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
    <title>Web app - Create event</title>
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
          <form action="configuracoes/criar_evento.php" method="POST" enctype="multipart/form-data">
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
                    <div class="col-6">
                      <label for="estados" style=' margin-left: 130px;'>Estado:</label>
                      <select name="estado" id="estados" style=' margin-left: 130px; width:230px;height:30px' required>
                        <option value="" >Selecione um estado...</option>
                      </select>

                      <br><br>

                        <label for="municipios" style=' margin-left: 130px;'>Município:</label>
                        <select name="municipio" id="municipios"  style=' margin-left: 130px; width:230px;height:30px' required>
                          <option value="" >Selecione um município...</option>
                        </select>
                      </div>
                      <div id = "map"></div> 
                  </div>

                  <div class="row" style='margin-top:35px;'>
                    <div class="col-10">
                      <a href="create_event2.php" class="text-start">
                        <button type="button" class="btn btn-secondary btn-sm ms-3">
                          Previous
                        </button>
                      </a>
                    </div>
                    <div class="col-2">
                      <button type="submit" name ="submit3" class="btn btn-secondary btn-sm me-3">
                        Create
                      </button>
                    </div>
                  </div>
                </div>
              </div>
          </form>
        </div>
    </div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="API/ibge.js"></script>
<script src = "API/google_maps.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1ymgJSOFD9yCS4hoC7hNeU8Km40bbQi0&callback=initMap" async defer></script>