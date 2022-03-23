<!DOCTYPE html>
<html lang="en" ng-app="application" ng-controller="mainController">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petfind</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- <script src="../assets/libraries/jquery.js"></script> -->
	<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="../../assets/scripts/init_angular.js"></script>
    <script src="../../assets/scripts/main.js"></script>

</head>
<body ng-app="application" ng-controller="mainController">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffe8e8;">
  <a class="navbar-brand" href="#">
      <img src="../../assets/images/logo_findme.png" style="margin-left: 50px" width="150" height="75" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active" style="margin-left: 50px">
        <a class="nav-link" href="#">Inicio </span></a>
      </li>
      <li class="nav-item" style="margin-left: 50px">
        <a class="nav-link" href="#">Sobre nosotros</a>
      </li>
      <li class="nav-item" style="margin-left: 50px">
        <a class="nav-link" href="#">Zonas</a>
      </li>
    </ul>
  </div>
  <ul class="nav justify-content-end">
      <button type="button" style="margin-right: 50px" class="btn btn-danger">Crear reporte</button>
      <button type="button" style="margin-right: 50px" class="btn btn-light">Iniciar sesión</button>
  </ul>
</nav>
</body>
</html>