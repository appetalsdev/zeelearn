/*var App = angular.module('userLogin', ["ui.bootstrap"]);
App.controller('FormController', function($scope, $location, $http){
 
 $scope.username = undefined;
 $scope.password = undefined;
 $scope.message = undefined;
 $scope.submitForm = function ()
 {
 console.log("posting data....");
	 $http({
	 method: 'POST',
	 url: 'index.php/login/login_ang',
	 headers: {'Content-Type': 'application/json'},
	 data: JSON.stringify({username: $scope.username,password:$scope.password})
	 }).success(function (data) {
	 console.log(data);
		$scope.message = data.status;
		if($scope.message == 'success') {
			window.location = 'index.php/admin/index';
		} else {
			jQuery('.alert').show();
			jQuery('.alert > span').html(data.msg);
		}
	 });
 }
 });*/
 

var App = angular.module('userLogin', []);
App.controller('LoginController', function($scope, $location, Users){
 
 $scope.username = undefined;
 $scope.password = undefined;
 $scope.message = undefined;
 $scope.submitForm = function ()
 {
	 Users.checkLogin($scope.username, $scope.password).success(function (data) {
		$scope.message = data.status;
		if($scope.message == 'success') {
			window.location = 'index.php';
		} else {
			jQuery('.alert').show();
			jQuery('.alert > span').html(data.msg);
		}
	 });
 }
 });

App.factory("Users", function ($http) {
    var factory = {};
    factory.checkLogin = function (username, password) {
        return $http({
            method: 'POST',
			data: JSON.stringify({username: username,password:password}),
            url: 'index.php/login/login_ang',
            responseType: 'json'
        });
    };
	return factory;
});