ZeelearnApp.controller('SchoolController', function ($rootScope, $scope, $state, Schools, createDialog, $timeout) {
	
	$scope.schools = [];
    $scope.ord = 'id';
	$scope.limitOptions = {
            5: "5",
            10: "10",
            20: "20",
			50: "50",
			100: "100"
          };
	
    
    $scope.$on('$viewContentLoaded', function () {
        Schools.getSchools().success(function (data) {
			$scope.filteredItems = data.length; //Initially for no filter
			$scope.schools = data;
            $scope.totalItems = data.length;
			$scope.currentPage = 1;
			$scope.itemsPerPage = GLOBAL_PAGINATION_SIZE;
        });
		
		$scope.toInt = function(val) {
			return parseInt(val,10); 
		};
    });
	
	

	
	/*$scope.changed = function (pg) {
		$scope.selectedAll = false;
        $scope.enableDelete = false;
        Schools.getSchools().success(function (data) {
			$scope.schools = data.data;
        });
    };*/
	
	$rootScope.addSchoolView = function () {

        createDialog(BASE_URL + "/index.php/schools/addschoolview", {
            id: 'addSchool',
            title: 'Add School',
            backdrop: true,
			controller: 'AddController',
            footerTemplate: false,
            success: {label: 'Success', fn: function () {
                    console.log('Add school modal closed');
                }}
        }
		, {
            Edit: ''

        }
        );
    };
	
	$scope.editSchoolView = function (pid) {

        createDialog(BASE_URL + "/index.php/schools/addschoolview", {
            id: 'editSchool',
            title: 'Edit School',
            backdrop: true,
            controller: 'AddController',
            footerTemplate: false,
            success: {label: 'Success', fn: function () {
                    console.log('Edit school modal closed');
                }}
        }
        , {
            Edit: pid

        }
        );
    };
	
	
	$scope.deleteSchoolView = function (pid, name) {
		createDialog({
            id: 'delSchool',
			template:  angular.element(
                    '<div class="row-fluid">' +
                    ' <div>' +
                    '   <div class="codebox" style="text-align:center;">' +
                    '    <h4>Are you sure you want to delete School <b>"'+name+'"</b>?</h4> ' +
                    '   </div>\n' +
                    ' </div>\n' +
                    '</div>'),
            title: 'Delete School',
            backdrop: true,
            footerTemplate: ' <div style="width:100%; padding:5px 5px 25px 5px; text-align:center;">' +
                    '<button class="btn btn-info"  ng-click="$modalSuccess()">Ok</button><button class="btn red" style="margin-left:10px;" ng-click="$modalCancel()">Cancel</button>' +
                    '</div>',
            success: {label: 'Save', fn: function () {
                    Schools.deleteSchool(pid).success(function (data) {
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

ZeelearnApp.controller('AddController', function ($scope, $state, $rootScope, Schools, Edit, createDialog) {

    $scope.frm = {};
	$scope.phoneNumbr = /^[(]{0,1}[0-9]{3}[)\.\- ]{0,1}[0-9]{3}[\.\- ]{0,1}[0-9]{4}$/;
	if(Edit !='') {
		Schools.getSchoolDetails(Edit).success(function (school) {
			$scope.frm = school.data;
        });
		
		$scope.processadd = function ()
		{
			Schools.editSchool($.param($scope.frm)).success(function (data) {
				
				if (data.success == true) {
					$scope.$modalClose();
					toastr.success(data.message);
					$state.reload();
				} else {
					toastr.error(data.message);
				}
			});
		};
	}
	else {
		$scope.processadd = function ()
		{
			Schools.addSchool($.param($scope.frm)).success(function (data) {
				
				if (data.success == true) {
					$scope.$modalClose();
					toastr.success(data.message);
					$state.reload();
				} else {
					toastr.error(data.message);
				}
			});
		};
	}

});

ZeelearnApp.factory("Schools", function ($http) {
    var factory = {};
    factory.addSchool = function (frm) {
        var url = BASE_URL + '/index.php/schools/addschool';
        return $http.post(url, frm);
    };
	
	factory.getSchools = function () {
        return $http({
            method: 'POST',
            /*data: 'pageno=' + pgno + '&order_data='+ord,*/
            url: BASE_URL + '/index.php/schools/viewschools',
            responseType: 'json'
        });
    };
	
	factory.getSchoolDetails = function (pid)
    {
        return $http({
            method: 'POST',
            url: BASE_URL + '/index.php/schools/schooldetails',
            data: "pid=" + pid,
            responseType: "JSON"
        });
    };
	
	factory.editSchool = function (frm) {
        var url = BASE_URL + '/index.php/schools/editschool';
        return $http.post(url, frm);
    };
	
	factory.deleteSchool = function (pid) {
        return $http({
            method: 'POST',
            data: 'id=' + pid,
            url: BASE_URL + '/index.php/schools/deleteschool',
            responseType: 'json'
        });
    };
	
	return factory;
});

/*ZeelearnApp.factory('isValueAvailable', function($q, $http) {
  return function(value) {
	var deferred = $q.defer();

	$http.get(BASE_URL + '/index.php/schools/checkschool?name=' + value).then(function() {
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

