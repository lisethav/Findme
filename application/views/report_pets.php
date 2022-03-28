
<link rel="stylesheet" href="../../assets/styles/report_pets.css">

<script src="../../assets/scripts/report_pets.js"></script>

<div class="card card-panel-login" ng-controller="controller_report_pets">
	<div class="color-form-head">
		<h4 class="card-title text-center">Encuentra tu mascota</h4>
	</div>
	<div class="card-body">
	<form>
		<div class="form-group">
			<label for="exampleFormControlSelect1">Tu mascota es:</label>
			<select ng-model="txt_type_pet_id" class="form-control">
				<option value={{type.type_pet_id}} ng-repeat="type in list_type">{{type.type}}</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Si seleccionó otro, especifique:</label>
			<input  ng-model="txt_other_type"type="text" class="form-control" id="exampleFormControlInput3">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Nombre mascota</label>
			<input ng-model="txt_name" type="text" class="form-control" id="exampleFormControlInput3" placeholder="Kyara, Rufus...">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Raza</label>
			<input ng-model="txt_breed" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Bulldog, Golden retriver, Criollo...">
		</div>
		<div class="form-group">
			<label for="exampleFormControlSelect1">Tamaño</label>
			<select ng-model="txt_size_pet_id" class="form-control">
			<option value={{size.size_pet_id}} ng-repeat="size in list_size">{{size.size}}</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Color</label>
			<input ng-model="txt_color" type="text" class="form-control" id="exampleFormControlInput2" placeholder="Gris, café, blanco...">
		</div>
		<div class="form-group">
			<label for="exampleFormControlSelect1">Ciudad donde se perdió:</label>
			<select ng-model="txt_cities_id" class="form-control">
			<option value={{city.cities_id}} ng-repeat="city in list_cities">{{city.city}}</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Dirección</label>
			<input ng-model="txt_lost_address" type="text" class="form-control" id="exampleFormControlInput3" placeholder="Calle 10#12-34...">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Día que perdió su mascota</label>
			<input ng-model="txt_lost_date" type="text" class="form-control" id="exampleFormControlInput3" placeholder="yyyy-mm-dd">
		</div>

		<div class="form-group">
			<label for="exampleFormControlInput1">Teléfono de contacto #1 </label>
			<input maxlength="10" ng-model="txt_cellphone1" type="text" class="form-control" id="exampleFormControlInput3" placeholder="31000000000">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Teléfono de contacto #2 </label>
			<input maxlength="10"  ng-model="txt_cellphone2" type="text" class="form-control" id="exampleFormControlInput3" placeholder="31000000000">
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Recompensa </label>
			<input ng-model="txt_reward" type="text" class="form-control" id="exampleFormControlInput3" placeholder="Opcional">
		</div>
		<div class="form-group">
			<label for="exampleFormControlTextarea1">Detalles adicionales:</label>
			<textarea ng-model="txt_description" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Tenía collar azul..."></textarea>
		</div>
		<div class="form-group">
			<div>
				<label for="exampleFormControlFile1">Sube algunas fotos de tu mascota</label>
			</div>
			<input type="file" multiple class="form-control-file" id="pet_images">
		</div>
	</form>

	
	   <div class="alert alert-danger" ng-if="txt_err_report" role="alert">
                {{txt_err_report}}
        </div>

		<div class="text-center">
			<a href="" class="btn btn-primary" ng-click="check_report()">Crear reporte</a>
		</div>
	</div>
</div>
