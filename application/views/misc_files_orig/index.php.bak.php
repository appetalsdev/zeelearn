<!DOCTYPE html>
<html>
	<head>
	  <meta charset='utf-8'>
	  <title>testing</title>
	</head>


		
	<body>
		<p>
		<b>Codeignighter MVC: Testing Angularjs + CRUD</b> 
		</p> </br>

		

		<div ng-app="app" ng-controller="decontroller" >
			<table class="table table-bordered table-striped table-hover"  style="width:50%">
				<thead>
					<tr>
						<th>Id</th>
						<th>Username</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Address</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="n in list_data">
						<td>{{n.id}}</td>
						<td>{{n.username}}</td>
						<td>{{n.first_name}}</td>
						<td>{{n.last_name}}</td>
						<td>{{n.address}}</td>
					</tr>
				</tbody>				

			</table>
		</div>

	</body>

		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/underscore.min.js"></script>

		<script type="text/javascript" src="assets/js/angular/angular.min.js"></script>
		<script type="text/javascript" src="assets/js/angular/angular-resource.min.js"></script>
		<script type="text/javascript" src="assets/js/angular/angular-animate.min.js"></script>
		<script type="text/javascript" src="assets/js/angular/angular-route.min.js"></script>		
		<script type="text/javascript">
			var app=angular.module('app',[]);	
			app.controller('decontroller',function($scope, $http){
				$scope.list_data=[];
				$http.get("<?php echo site_url('home/load_data');?>").success(function(result){
					//console.log(result); // show data objects/results in console
					$scope.list_data=result;
				});

			});	
		</script>


		<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap/js/ui-bootstrap-tpls-0.11.2.min.js"></script>		
		<link rel="stylesheet" href="assets/js/bootstrap/css/bootstrap.min.css"></script>

		<link rel="stylesheet" href="assets/js/bootstrap/css/custom.css"></script>
		<link rel="stylesheet" href="assets/css/fonts/font-awesome.min.css"></script>

</html>