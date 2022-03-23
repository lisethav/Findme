angular.module("application").controller("controller_reports", function($scope, $http, $timeout){

  $scope.txt_cities_id = "";
  $scope.txt_lost_address = "";
  $scope.txt_lost_date = "";
  $scope.txt_name = "";
  $scope.txt_type_pet_id = "";
  $scope.txt_breed = "";
  $scope.txt_color = "";
  $scope.txt_size_pet_id = "";
  $scope.txt_cellphone1 = "";
  $scope.txt_cellphone2 = "";
  $scope.txt_reward = "";
  $scope.txt_status_id = "";
  $scope.txt_err_report = "";
  $scope.queue_request = 0;
  $scope.list_cities = []


  $scope.key_check_login = function(event){

    if(event.keyCode == 13){
      event.preventDefault();
      $scope.check_login();
    }

  };


  $scope.validate_report = function(){


    $scope.txt_err_report = "";

    if($scope.txt_user.length < 1 || $scope.txt_user.length > 50){
      $scope.txt_err_register = "Debes ingresar un correo electrónico válido";
      return false;
    }
    if($scope.txt_first_name.length < 1 || $scope.txt_first_name.length > 50){
      $scope.txt_err_register = "Debes ingresar un nombre válido";
      return false;
    }
	if($scope.txt_last_name.length < 1 || $scope.txt_last_name.length > 50){
		$scope.txt_err_register = "Debes ingresar un apellido válido";
		return false;
	}
	if($scope.txt_cellphone.length < 1 || $scope.txt_cellphone.length > 10){
		$scope.txt_err_register = "Debes ingresar un teléfono válido";
		return false;
	}
	if($scope.txt_password1.length < 1 || $scope.txt_password1.length > 10){
		$scope.txt_err_register = "La contraseña debe contener entre 1 y 10 caracteres";
		return false;
	}
	if($scope.txt_password2.length < 1 || $scope.txt_password2.length > 10){
		$scope.txt_err_register = "La contraseña debe contener entre 1 y 10 caracteres";
		return false;
	}
	if($scope.txt_password2 != $scope.txt_password1){
		$scope.txt_err_register = "La contraseña no coincide";
		return false;
	}
    return true;
  };


  //  $scope.queue_request++;

    $http({
      method: "post",
      url : "../Register/do_register",
      data : {
        user : $scope.txt_user,
		first_name : $scope.txt_first_name,
		last_name : $scope.txt_last_name,
		cellphone : $scope.txt_cellphone,
		password1 : $scope.txt_password1,
      }
    })
    .then(function(response){

		if(response.data.status == "error"){
		  $scope.txt_err_register = response.data.message;
		  return;
	  }
	  window.location.href="reports";
    });
  };


  $scope.get_cities = function(){
	  console.log("obteniendo ciudades")
	  $http({
		method: "get",
		url : "../reports/get_cities",
		data : {
		}
	  })
	  .then(function(response){
		  $scope.list_cities = response.data
       console.log(response);
	  });
  }

  $scope.get_cities();
});