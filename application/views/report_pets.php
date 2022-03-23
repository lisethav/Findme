<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>report_pets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/styles/report_pets.css">

	<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

    <script src="../../assets/scripts/report_pets.js"></script>


</head>
<body ng-app="application" ng-controller="controller_report_pets">

    <div class="card card-panel-login">
        <a class="logo-brand">
            <img src="../../assets/images/logo_findme.png" width="100" height="50" alt="">
        </a>
        <h4 class="card-title text-center">Crear reporte de mascota</h4>
        <div class="card-body">
        <form>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Tu mascota es:</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <option>Perro</option>
            <option>Gato</option>
            <option>Otro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre mascota</label>
            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Gris, café, blanco...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Raza</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Bulldog, Golden retriver, Criollo...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Tamaño:</label>
            <select class="form-control" id="exampleFormControlSelect2">
            <option>Grande</option>
            <option>Mediano</option>
            <option>Pequeño</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Color</label>
            <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Gris, café, blanco...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Ciudad donde se perdió:</label>
            <select class="form-control" id="exampleFormControlSelect3">
            <option>Medellín</option>
            <option>Sabaneta</option>
            <option>Itagui</option>
            <option>Envigado</option>
            <option>Bello</option>
            <option>Copacabana</option>
            <option>Girardota</option>
            <option>Barbosa</option>
            <option>Caldas</option>
            <option>La estrella</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Dirección</label>
            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="cl xx # x x...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Día que perdió su mascota</label>
            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="dd/mm/yyyy">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Teléfono de contacto #1 </label>
            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="31000000000">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Teléfono de contacto #2 </label>
            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="31000000000">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Recompensa </label>
            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Opcional">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Detalles adicionales:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Foto mascota</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
            <input type="file" class="form-control-file" id="exampleFormControlFile2">
        </div>
        </form>

            <div class="alert alert-danger" ng-if="txt_err_register" role="alert">
                {{txt_err_register}}
            </div>

            <div class="text-center">
                <a href="" class="btn btn-primary" ng-click="check_login()">Crear reporte</a>
            </div>
        </div>
      </div>

</body>
</html>