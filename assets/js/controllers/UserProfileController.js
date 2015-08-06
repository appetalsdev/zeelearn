'use strict';

ZeelearnApp.controller('UserProfileController', function($rootScope, $scope, $http, $timeout, UserProfile) {
    $scope.$on('$viewContentLoaded', function() {   
       
        Layout.setSidebarMenuActiveLink('set', $('#sidebar_menu_link_profile')); // set profile link active in sidebar menu 
		
		
    });
	
	UserProfile.getUserprofile().success(function (data) {
			console.log(data.data);
			$scope.frm = data.data;
        });

    // set sidebar closed and body solid layout mode
    $rootScope.settings.layout.pageSidebarClosed = true;

}); 

ZeelearnApp.factory("UserProfile", function ($http) {
    var factory = {};
    factory.getUserprofile = function () {
        return $http({
            method: 'GET',
            url: BASE_URL + '/index.php/profile/get_user_profile_data',
            responseType: 'json'
        });
    };
	
	return factory;
});
