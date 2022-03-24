angular.module("application").controller("controller_reports", function($scope, $http, $timeout){

  $scope.txt_cities_id = "";
  $scope.txt_err_report = "";
  $scope.queue_request = 0;
  $scope.list_reports = []


  $scope.validate_report = function(){

    $scope.txt_err_report = "";

    if($scope.txt_cities_id.length < 1){
      $scope.txt_err_report = "Debes seleccionar una ciudad";
      return false;
    }
    return true;
  };


  //  $scope.queue_request++;

  $scope.get_reports = function(){
	  $http({
		method: "get",
		url : "../city_reports/get_reports",
		data : {}
	  })
	  .then(function(response){
		  $scope.list_reports = response.data
	   console.log(response);
	  });
  }
  $scope.get_reports();


$scope.check_report = function(){
    if(!$scope.validate_report()){
      return;
    }

};

});