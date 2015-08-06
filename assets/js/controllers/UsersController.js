ZeelearnApp.controller('UsersController', function ($rootScope, $scope, $state, Users, createDialog, $timeout) {
	
	$scope.users = [];
    $scope.ord = 'id';
	$scope.currentPage = 1;
	$scope.itemsPerPage = 5;
	$scope.roles = '';
	$scope.limitOptions = {
            5: "5",
            10: "10",
            20: "20",
			50: "50",
			100: "100"
          };
	 
    
    $scope.$on('$viewContentLoaded', function () {
        Users.getUsers().success(function (data) {
			$scope.users = data;
            $scope.totalItems = data.length;
			$scope.filteredItems = data.length;
        });
		
		$scope.toInt = function(val) {
			return parseInt(val,10); 
		};
    });
	
	/*$scope.changed = function (pg) {
		$scope.selectedAll = false;
        $scope.enableDelete = false;
        Users.getUsers(pg, $scope.ord).success(function (data) {
			$scope.users = data.data;
        });
    };*/
	
	
	
	$rootScope.addUserView = function () {

        createDialog(BASE_URL + "/index.php/users/adduserview", {
            id: 'addUser',
            title: 'Add User',
            backdrop: true,
			controller: 'AddController',
            footerTemplate: false,
            success: {label: 'Success', fn: function () {
                    console.log('Add user modal closed');
                }}
        }
		, {
            Edit: ''

        }
        );
    };
	
	$scope.editUserView = function (pid) {

        createDialog(BASE_URL + "/index.php/users/adduserview", {
            id: 'editUser',
            title: 'Edit User',
            backdrop: true,
            controller: 'AddController',
            footerTemplate: false,
            success: {label: 'Success', fn: function () {
                    console.log('Edit user modal closed');
                }}
        }
        , {
            Edit: pid

        }
        );
    };
	
	
	$scope.deleteUserView = function (pid, username) {
		createDialog({
            id: 'delUser',
			template:  angular.element(
                    '<div class="row-fluid">' +
                    ' <div>' +
                    '   <div class="codebox" style="text-align:center;">' +
                    '    <h3>Do you like to Delete User "'+username+'"?</h3> ' +
                    '   </div>\n' +
                    ' </div>\n' +
                    '</div>'),
            title: 'Delete User',
            backdrop: true,
            footerTemplate: ' <div style="width:100%; padding:5px 5px 25px 5px; text-align:center;">' +
                    '<button class="btn btn-info"  ng-click="$modalSuccess()">Ok</button><button class="btn red" style="margin-left:10px;" ng-click="$modalCancel()">Cancel</button>' +
                    '</div>',
            success: {label: 'Save', fn: function () {
                    Users.deleteUser(pid).success(function (data) {
						if (data.success == true) {
							toastr.success(data.message);
							$state.reload();
						} else {
							toastr.error(data.message);
						}
					});
                }}
        }
        );
    };
	
	$scope.changePassView = function (pid, username) {
		createDialog({
            id: 'changePass',
			template:  angular.element(
                    '<div class="row-fluid">'+
					'	<div class="form-horizontal">'+
					'		<h4 style="text-align:center;">Change password of "'+username+'"</h4> '+
					'		<div class="col-xs-6" style="text-align:right;">'+
					'		<label class="control-label">New Password: </label>'+
					'		</div>'+
					'		<div class="col-xs-6" style="padding-left:0;">'+
					'		<input class="form-control input-inline input_full" type="text" name="new_password" id="new_password" ng-model="new_password" ng-minlength="8">'+
					'		<p class="help-block">Minimum 8 characters.</p> '+
					'		</div>'+
					'	</div>'+
					'</div>'),
            title: 'Change Password',
            backdrop: true,
            footerTemplate: ' <div style="width:100%; padding:5px 5px 25px 5px; text-align:center;">' +
                    '<button class="btn btn-info"  ng-click="$modalSuccess()" ng-disabled="!new_password">Ok</button><button class="btn red" style="margin-left:10px;" ng-click="$modalCancel()">Cancel</button>' +
                    '</div>',
            success: {label: 'Save', fn: function () {
					var newpass = angular.element('#new_password').val();
                    Users.changePassword(pid, newpass).success(function (data) {
						if (data.success == true) {
							toastr.success(data.message);
							$state.reload();
						} else {
							toastr.error(data.message);
						}
					});
                }}
        }
        );
    };
	
	$scope.setPage = function(pageNo) {
		$scope.currentPage = pageNo;
	};
	
	$scope.filter = function() {
		$timeout(function() {
			$scope.filteredItems = $scope.filtered.length;
		}, 10);
	};
	
	$scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };
	
});

ZeelearnApp.controller('AddController', function ($scope, $state, $rootScope, $filter, $http, Users, Edit, createDialog) {

    $scope.frm = {};
	var selroles = '';
	$scope.phoneNumbr = /^[(]{0,1}[0-9]{3}[)\.\- ]{0,1}[0-9]{3}[\.\- ]{0,1}[0-9]{4}$/;
	$scope.selected = {};
	$scope.editroles = [];
	
	
	Users.getRoles().success(function (data) {
		$scope.roles = data;
	});
	
	
	
	if(Edit !='') {
		
		Users.getUserDetails(Edit).success(function (user) {
			
			$scope.editselroles = [];
			$scope.frm = user.data;
			if($scope.frm.roles) {
				$scope.editselroles = $scope.frm.roles;
				$scope.editroles = $scope.editselroles.split(',');
				$scope.selected.roles = $scope.editselroles;
			}
        });
		
		$scope.selected = {
			roles: []
		};
		
	
		$scope.processadd = function ()
		{
			$scope.frm.roles = $scope.editroles;
			
			Users.editUser($.param($scope.frm)).success(function (data) {
				$scope.$modalClose();
				if (data.success == true) {
					toastr.success(data.message);
					$state.reload();
				} else {
					toastr.error(data.message);
				}
			});
		};
	}
	else {
		$scope.selected = {
			roles: []
		};
		
	
		$scope.processadd = function ()
		{
			selroles = $scope.editroles;
			$scope.frm.roles = selroles;
			
			Users.addUser($.param($scope.frm)).success(function (data) {
				$scope.$modalClose();
				if (data.success == true) {
					toastr.success(data.message);
					$state.reload();
				} else {
					toastr.error(data.message);
				}
			});
		};
	}
	
	// Any function returning a promise object can be used to load values asynchronously
	/*$scope.getSchools = function(val) {
	return $http.get(BASE_URL + '/index.php/users/getschools', {
	  params: {
		value: val
	  },
	  responseType: 'json'
	}).then(function(response){
		console.log(response.data);
		return response.data.map(function(item){
			return item;
		  });
	  	
	});
	};*/
	
	Users.getSchools().success(function (data) {
			$scope.Schools = data;
	});

});

ZeelearnApp.factory("Users", function ($http) {
    var factory = {};
    factory.addUser = function (frm) {
		var url = BASE_URL + '/index.php/users/adduser';
        return $http.post(url, frm);
    };
	
	factory.getUsers = function () {
        return $http({
            method: 'POST',
            /*data: 'pageno=' + pgno + '&order_data='+ord,*/
            url: BASE_URL + '/index.php/users/viewusers',
            responseType: 'json'
        });
    };
	
	factory.getUserDetails = function (pid)
    {
        return $http({
            method: 'POST',
            url: BASE_URL + '/index.php/users/userdetails',
            data: "pid=" + pid,
            responseType: "JSON"
        });
    };
	
	factory.editUser = function (frm) {
        var url = BASE_URL + '/index.php/users/edituser';
        return $http.post(url, frm);
    };
	
	factory.deleteUser = function (pid) {
        return $http({
            method: 'POST',
            data: 'id=' + pid,
            url: BASE_URL + '/index.php/users/deleteuser',
            responseType: 'json'
        });
    };
	
	factory.getRoles = function () {
        return $http({
            method: 'POST',
            url: BASE_URL + '/index.php/users/getroles',
            responseType: 'json'
        });
    };
	
	factory.changePassword = function (pid, newpass) {
        return $http({
            method: 'POST',
            data: 'id=' + pid + '&password=' +newpass,
            url: BASE_URL + '/index.php/users/changepass',
            responseType: 'json'
        });
    };
	
	factory.getSchools = function () {
        return $http({
            method: 'POST',
            /*data: 'value=' + val,*/
            url: BASE_URL + '/index.php/users/getschools',
            responseType: 'json'
        });
    };
	
	return factory;
});

/*ZeelearnApp.factory('isValueAvailable', function($q, $http) {
  return function(value) {
	var deferred = $q.defer();

	$http.get(BASE_URL + '/index.php/users/checkuser?name=' + value).then(function() {
	  // Found the value, therefore not unique.
	  console.log('reject');
	  deferred.reject();
	}, function() {
	  // Value not found, therefore unique!
	  console.log('resolve');
	  deferred.resolve();
	});

	return deferred.promise;
  }
});*/