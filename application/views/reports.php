
	<link rel="stylesheet" href="../../assets/styles/reports.css">
	<script src="../../assets/scripts/reports.js"> </script>

    <main id="main" class="main" ng-controller="controller_reports">

        <div class="text-principal-guide">
            <h2>Mascotas perdidas</h2>
			<h4>Selecciona una ciudad para ver los reportes</h4>

            <div>
                <div class="dropdown">
                    <a class="btn btn-secondary btn-pretty dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{selected_city.city || 'Todos'}}
                    </a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<li ng-click="clickCity(city)" class="dropdown-item" ng-repeat="city in list_cities">{{city.city}}</li>
						</ul>
                    </div>
            </div>
        </div>


		<div class="jumbotron" ng-if="list_reports.length < 1">
			<h1 class="display-4">No se encontraron reportes en la ciudad de {{selected_city.city}}!</h1>
		</div>

        <div class="modal" id="modal_detalle" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalle del reporte</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

					<div>
						<img src="../../assets/images/pets/{{selected_report.pet_report_id}}.png" style="width:452px; height: 307px;"  alt="">
					</div>

					<div class="mb-3 row">
						<label for="staticEmail" class="col-sm-3 col-form-label">Nombre</label>
						<div class="col-sm-9">
						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{selected_report.name}}">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="staticEmail" class="col-sm-3 col-form-label">Raza</label>
						<div class="col-sm-9">
						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{selected_report.breed}}">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="staticEmail" class="col-sm-3 col-form-label">Dirección</label>
						<div class="col-sm-9">
						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{selected_report.lost_address}}">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="staticEmail" class="col-sm-3 col-form-label">Color</label>
						<div class="col-sm-9">
						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{selected_report.color}}">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="staticEmail" class="col-sm-3 col-form-label">Fecha pérdida</label>
						<div class="col-sm-9">
						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{selected_report.lost_date}}">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="staticEmail" class="col-sm-3 col-form-label">Lugar pérdida</label>
						<div class="col-sm-9">
						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{selected_report.lost_address}}">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="staticEmail" class="col-sm-3 col-form-label">Teléfono 1</label>
						<div class="col-sm-9">
						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{selected_report.cellphone1}}">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="staticEmail" class="col-sm-3 col-form-label">Teléfono 2</label>
						<div class="col-sm-7">
						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{selected_report.cellphone2}}">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="staticEmail" class="col-sm-3 col-form-label">Recompensa</label>
						<div class="col-sm-9">
						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{selected_report.reward}}">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="staticEmail" class="col-sm-3 col-form-label">Detalle</label>
						<div class="col-sm-9">
						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{selected_report.description}}">
						</div>
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
        </div>


        <div class="list-reports">


            <div class="container-fluid">
                <div class="row">

                    <div class="col" ng-repeat="report in list_reports">
                        <div class="card card-report" style="width: 18rem;">
                            <img src="../../assets/images/pets/{{report.pet_report_id}}.png" ng-if="report.has_image === '1'" class="card-img-top" alt="...">
                            <img src="../../assets/images/no_pet_available.png"  ng-if="report.has_image === '0'" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center"> {{report.name}} </h5>
                                <p class="card-text"> Lugar: {{report.lost_address}} </p>
								<p class="card-text"> Día en que se perdió: {{report.lost_date}} </p>
								<p class="card-text"> Celular: {{report.cellphone1}} </p>
                                <a href="#" class="btn btn-primary" ng-click="ver_detalle(report)" id="detalle_pet">Ver detalle</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </main><!-- End #main -->    
 