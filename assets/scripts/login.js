angular.module("application",[]);

angular.module("application").config(function($httpProvider){

  $httpProvider.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded; charset=UTF-8";

  $httpProvider.defaults.transformRequest = function(data){
      if (data === undefined) {
          return data;
      }
      return $.param(data);
  };

});

angular.module("application").controller("controller_login", function($scope, $http, $timeout){


  $scope.txt_user = "";
  $scope.txt_password = "";
  $scope.txt_err_login = "";
  $scope.queue_request = 0;


  $scope.key_check_login = function(event){

    if(event.keyCode == 13){
      event.preventDefault();
      $scope.check_login();
    }

  };


  $scope.validate_login = function(){

    $scope.txt_err_login = "";

    if($scope.txt_user.length < 1){
      $scope.txt_err_login = "Debes ingresar un usuario";
      return false;
    }
    else if($scope.txt_password.length < 1){
      $scope.txt_err_login = "Debes ingresar una contraseña valida";
      return false;
    }

    return true;

  };


  $scope.check_login = function(){
    if(!$scope.validate_login()){
      return;
    }

  //  $scope.queue_request++;

    $http({
      method: "post",
      url : "../login/do_login",
      data : {
        user : $scope.txt_user,
        password1 : $scope.txt_password
      }
    })
    .then(function(response){

		if(response.data.status == "error"){
		  $scope.txt_err_login = response.data.message;
		  return;
	  }
	  window.location.href="home";
    });

  };


});