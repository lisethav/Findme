<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindMe - Perfil</title>

    <!-- CSS Files -->
    <link href="../../assets\vendor\bootstrap\css\bootstrap.css" rel="stylesheet">

</head>

<body>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Perfil</h1>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="../../assets/images/profile.png" alt="Profile" class="rounded-circle">
              <h2>Isabela Gómez</h2>
                <h3>example@mail.com</h3>
                <h3>3000000000</h3>
                <button href="reports" class="btn btn-danger" >Reportes Macotas</button>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Reportes</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editar datos personales</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Cambiar contraseña</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                  <h5 class="card-title">Mis reportes</h5>

                  <div class="col">
                      <div class="card card-report" style="width: 18rem;">
                        <img src="../../assets/images/pets/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lulu</h5>
                            <p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci molestias quo consequatur voluptas nam, eius accusantium eveniet cumque doloribus tenetur aliquam est officia excepturi numquam vitae odio, mollitia ut provident? </p>
                            <a href="#" class="btn btn-primary" id="detalle_lulu">Ver detalle</a>
                        </div>
                    </div>
                  </div>

                  <div class="col">
                      <div class="card card-report" style="width: 18rem;">
                        <img src="../../assets/images/pets/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lulu</h5>
                            <p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci molestias quo consequatur voluptas nam, eius accusantium eveniet cumque doloribus tenetur aliquam est officia excepturi numquam vitae odio, mollitia ut provident? </p>
                            <a href="#" class="btn btn-primary" id="detalle_lulu">Ver detalle</a>
                        </div>
                    </div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Imagen de perfil</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="../../assets/images/profile.png" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Name" class="col-md-4 col-lg-3 col-form-label">Nombre</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Name" type="text" class="form-control" id="Name" value="Isabela">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="LastNamee" class="col-md-4 col-lg-3 col-form-label">Apellido</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="LastNamee" type="text" class="form-control" id="LastNamee" value="Gómez">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Número Celular</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="(+57) 3100000000">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Correo</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="example@mail.com">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Contraseña actual</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nueva contraseña</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Validar contraseña</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

</body>
</html>