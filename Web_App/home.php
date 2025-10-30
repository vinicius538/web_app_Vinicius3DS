<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web app - Homepage</title>
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
          <div class="col-11 mx-auto" style="background-color: white; margin-top: 30px; padding-bottom: 80px;">
              <h3 class="poppins-light" style="padding-top: 50px;">
                  <strong class="d-block text-center">
                      Welcome to the Web App
                  </strong>
              </h3>
                 <strong>
                    Your events
                  </strong>
                  <br>
                    
                      <a href="create_event1.php">
                        <button>
                          <img src="img/pluh.jpg" style="width: 14rem;" alt="">
                        </button>
                      </a>

                    <h4 class="mt-5 mb-3">Recent</h4>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card">
                          <img src="img/copacabana.webp" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Copacabana</h5>
                            <p class="card-text">Praia icônica do Rio, famosa pelo calçadão, eventos ao ar livre e o Réveillon que atrai milhões.</p>
                            <a href="#" class="btn btn-secondary">Go somewhere</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="card">
                          <img src="img/cristovao.webp" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Feira de São Cristóvão</h5>
                            <p class="card-text">Espaço cultural com comidas típicas, música e artesanato que celebra a cultura nordestina.</p>
                            <a href="#" class="btn btn-secondary">Go somewhere</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="card">
                          <img src="img/rock in rio.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Rock in Rio</h5>
                            <p class="card-text">Um dos maiores festivais de música do mundo, com shows nacionais e internacionais incríveis.</p>
                            <a href="#" class="btn btn-secondary">Go somewhere</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="card">
                          <img src="img/festa junina.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Festa Junina</h5>
                            <p class="card-text">Celebrações com quadrilhas, comidas típicas, roupas caipiras e música regional.</p>
                            <a href="#" class="btn btn-secondary">Go somewhere</a>
                          </div>
                        </div>
                      </div>
                    </div>
        </div>
    </div>
</body>

</html>