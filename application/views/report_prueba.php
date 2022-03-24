<script src="../../assets/scripts/reports.js"></script>

	<!-- <div id="preloader_main" ng-show="queue_request > 0">
		<div class="container-preloader">
			<img src="../../assets/images/gif/loader1.gif" alt="">
        </div>
    </div> -->
    <div ng-controller="controller_reports">
		<div class="card card-panel-login">
			<h4 class="card-title text-center">Reporta tu mascota perdida</h4>
			<div class="card-body">
				<div class="mb-3">
					<div class="form-group">
						<label for="exampleFormControlInput1" class="form-label">Ciudad donde se perdió</label>
						<select ng-model="txt_cities_id" class="form-control">
							<option value={{city.cities_id}} ng-repeat="city in list_cities">{{city.city}}</option>
						</select>
					</div>
				  </div>
				  <div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">Dirección donde se perdió</label>
					<input ng-model="txt_lost_address" type="text" maxlength="20" class="form-control">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">name </label>
					<input ng-model="txt_last_name" type="text" maxlength="20" class="form-control">
				</div>
				<div class="form-group">
						<label for="exampleFormControlInput1" class="form-label">size</label>
						<select ng-model="txt_size_pet_id" class="form-control">
							<option value={{size.size_pet_id}} ng-repeat="size in list_size">{{size.size}}</option>
						</select>
					</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">Celular</label>
					<input ng-model="txt_cellphone" type="text" maxlength="10" class="form-control">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">Contraseña</label>
					<input ng-model="txt_password1" type="password" maxlength="10" class="form-control">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">Repetir contraseña</label>
					<input ng-model="txt_password2" type="password" maxlength="10" class="form-control">
				</div>
	
	
				<div class="alert alert-danger" ng-if="txt_err_report" role="alert">
					{{txt_err_report}}
				</div>
	
				<div class="text-center">
					<a href="" class="btn btn-primary" ng-click="check_report()">Reportar mascota</a>
				</div>
	
				<div class="text-center">
					<a class="btn-login" href="login">¿Ya tienes una cuenta?</a>
				</div>
			</div>
		  </div>
	</div>
