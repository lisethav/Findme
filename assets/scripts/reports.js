angular.module("application").controller("controller_reports", function($scope, $http, $timeout){
	
	$scope.txt_cities_id = 1;
	$scope.txt_err_report = "";
	$scope.queue_request = 0;
	$scope.list_reports = [];
	$scope.list_cities = [];
	$scope.selected_city = {}
  
  
	$scope.validate_report = function(){
  
	  $scope.txt_err_report = "";
  
	  if($scope.txt_cities_id.length < 1){
		$scope.txt_err_report = "Debes seleccionar una ciudad";
		return false;
	  }
	  return true;
	};
  
  
	//  $scope.queue_request++;

	$scope.get_cities = function(){
		console.log("obtener ciudades")
		$http({
		  method: "get",
		  url : "../report_pets/get_cities",
		  data : {}
		})
		.then(function(response){
			$scope.list_cities = response.data
		 console.log(response);
		});
	}

  

	$scope.get_reports = function(){
		$http({
		  method: "post",
		  url : "../reports/get_reports",
		  data : {
			  cities_id : $scope.selected_city.cities_id
		  }
		})
		.then(function(response){
			$scope.list_reports = response.data
		 console.log(response);
		});
	}
  
  
  $scope.check_report = function(){
	  if(!$scope.validate_report()){
		return;
	  }
  
  };


  $scope.clickCity = function(selectedCity){
	  $scope.selected_city = selectedCity;
	  $scope.get_reports();
	  console.log("presionando ciudad", selectedCity);

  }
  

  $scope.ver_detalle = function(pet_report){
	$scope.selected_report = pet_report;
	console.log("viendo reporte", pet_report);
	$("#modal_detalle").modal("show");
  }

  $scope.get_reports();
  $scope.get_cities();

});