/***
GLobal Directives
***/

// Route State Load Spinner(used on page or content load)
ZeelearnApp.directive('ngSpinnerBar', ['$rootScope',
    function($rootScope) {
        return {
            link: function(scope, element, attrs) {
                // by defult hide the spinner bar
                element.addClass('hide'); // hide spinner bar by default

                // display the spinner bar whenever the route changes(the content part started loading)
                $rootScope.$on('$stateChangeStart', function() {
                    element.removeClass('hide'); // show spinner bar
                });

                // hide the spinner bar on rounte change success(after the content loaded)
                $rootScope.$on('$stateChangeSuccess', function() {
                    element.addClass('hide'); // hide spinner bar
                    $('body').removeClass('page-on-load'); // remove page loading indicator
                    Layout.setSidebarMenuActiveLink('match'); // activate selected link in the main menu
                    
                    // auto scorll to page top
                    setTimeout(function () {
                        Metronic.scrollTop(); // scroll to the top on content load
                    }, $rootScope.settings.layout.pageAutoScrollOnLoad);     
                });

                // handle errors
                $rootScope.$on('$stateNotFound', function() {
                    element.addClass('hide'); // hide spinner bar
                });

                // handle errors
                $rootScope.$on('$stateChangeError', function() {
                    element.addClass('hide'); // hide spinner bar
                });
            }
        };
    }
])

// Handle global LINK click
ZeelearnApp.directive('a',
    function() {
        return {
            restrict: 'E',
            link: function(scope, elem, attrs) {
                if (attrs.ngClick || attrs.href === '' || attrs.href === '#') {
                    elem.on('click', function(e) {
                        e.preventDefault(); // prevent link click for above criteria
                    });
                }
            }
        };
    });

// Handle Dropdown Hover Plugin Integration
ZeelearnApp.directive('dropdownMenuHover', function () {
  return {
    link: function (scope, elem) {
      elem.dropdownHover();
    }
  };  
});

var ValidSubmit = ['$parse', function ($parse) {
        return {
            compile: function compile(tElement, tAttrs, transclude) {
                return {
                    post: function postLink(scope, element, iAttrs, controller) {
                        var form = element.controller('form');
                        form.$submitted = false;
                        var fn = $parse(iAttrs.validSubmit);
                        element.on('submit', function (event) {
                            scope.$apply(function () {
                                element.addClass('ng-submitted');
                                form.$submitted = true;
                                if (form.$valid) {
                                    fn(scope, {$event: event});
                                }
                            });
                        });
                        scope.$watch(function () {
                            return form.$valid
                        }, function (isValid) {
                            if (form.$submitted == false)
                                return;
                            if (isValid) {
                                //element.removeClass('has-error').addClass('has-success');
                            } else {
                                //element.removeClass('has-success');
                                //element.addClass('has-error');
                            }
                        });
                    }
                }
            }
        }
    }]
ZeelearnApp.directive('validSubmit', ValidSubmit);

/* Validating field value - uniqueness */
/*ZeelearnApp.directive('uniqueValue', function(isValueAvailable) {
  return {
    restrict: 'A',
    require: 'ngModel',
    link: function(scope, element, attrs, ngModel) {
      ngModel.$asyncValidators.unique = isValueAvailable;
    }
  };
});*/

ZeelearnApp.directive('uniqueValue', function($http) {
      return {
           restrict: 'A',
           require: 'ngModel',
           link: function (scope, element, attrs, ngModel) {
			   var res = attrs.modType.split("-");
                element.bind('blur', function (e) {
					$http.get(BASE_URL + '/index.php/'+ res[0] +'/check'+res[1]+'?value=' + element.val()).success(function(data) {
						if (data.status !=0) {
                            ngModel.$setValidity('unique', false);
                        }
						else {
							ngModel.$setValidity('unique', true);
						}
                     });
                });
           }
      };
});

/*ZeelearnApp.directive('bootstrapSwitch', [
        function() {
            return {
                restrict: 'A',
                require: '?ngModel',
                link: function(scope, element, attrs, ngModel) {
                    element.bootstrapSwitch();
					
					element.on('switchChange.bootstrapSwitch', function(event, state) {
                        if (ngModel) {
                            scope.$apply(function() {
                                ngModel.$setViewValue(state);
                            });
                        }
                    });

                    scope.$watch(attrs.ngModel, function(newValue, oldValue) {
                        if (newValue) {
                            element.bootstrapSwitch('state', true, true);
                        } else {
                            element.bootstrapSwitch('state', false, true);
                        }
                    });
                }
            };
        }
    ]);*/

/* Custom bootstrapSwitch directive considering original bootstrapSwitch and checklist group */	
ZeelearnApp.directive("bootstrapSwitch", [function () {
return {
    restrict: "A",
    scope: {
        selectedItemsArray: "=",
        value: "@"
    },
    link: function (scope, elem) {
        scope.$watchCollection("selectedItemsArray", function (newValue) {
            if (_.contains(newValue, scope.value)) {
                elem.prop("checked", true);
				elem.bootstrapSwitch('state', true, true);
            } else {
                elem.prop("checked", false);
				elem.bootstrapSwitch('state', false, true);
            }
        });
        if (_.contains(scope.selectedItemsArray, scope.value)) {
            elem.prop("checked", true);
			elem.bootstrapSwitch('state', true, true);
        }
        elem.on("switchChange.bootstrapSwitch", function () {
            if (elem.prop("checked")) {
                if (!_.contains(scope.selectedItemsArray, scope.value)) {
                    scope.$apply(
                        function () {
                            scope.selectedItemsArray.push(scope.value);
                        }
                    );
                }
            } else {
                if (_.contains(scope.selectedItemsArray, scope.value)) {
                    var index = scope.selectedItemsArray.indexOf(scope.value);
                    scope.$apply(
                        function () {
                            scope.selectedItemsArray.splice(index, 1);
                        });
                }
            }
            //console.log(scope.selectedItemsArray);
        });
    }
};
}]);	
	
/*ZeelearnApp.directive("gcheckList", [function () {
return {
    restrict: "A",
    scope: {
        selectedItemsArray: "=",
        value: "@"
    },
    link: function (scope, elem) {
        scope.$watchCollection("selectedItemsArray", function (newValue) {
            if (_.contains(newValue, scope.value)) {
                elem.prop("checked", true);
            } else {
                elem.prop("checked", false);
            }
        });
        if (_.contains(scope.selectedItemsArray, scope.value)) {
            elem.prop("checked", true);
        }
        elem.on("change", function () {
            if (elem.prop("checked")) {
                if (!_.contains(scope.selectedItemsArray, scope.value)) {
                    scope.$apply(
                        function () {
                            scope.selectedItemsArray.push(scope.value);
                        }
                    );
                }
            } else {
                if (_.contains(scope.selectedItemsArray, scope.value)) {
                    var index = scope.selectedItemsArray.indexOf(scope.value);
                    scope.$apply(
                        function () {
                            scope.selectedItemsArray.splice(index, 1);
                        });
                }
            }
            console.log(scope.selectedItemsArray);
        });
    }
};
}]);*/

ZeelearnApp.filter('startFrom', function() {
	 return function(input, start) {
		 if(input) {
			 start = +start; //parse to int
			 return input.slice(start);
		 }
		return [];
	 }
});

ZeelearnApp.directive('validSchool', function($http) {
      return {
           restrict: 'A',
           require: 'ngModel',
           link: function (scope, element, attrs, ngModel) {
			   
                element.bind('blur', function (e) {
					var eleVal = element.val();
					var schoolVal = eleVal.split(', ');
					
					$http.get(BASE_URL + '/index.php/schools/checkschool?value=' + schoolVal[0] +'&city='+schoolVal[1]).success(function(data) {
						if (data.status !=0) {
                            ngModel.$setValidity('valid', true);
							return true;
                        }
						else {
							ngModel.$setValidity('valid', false);
						}
                     });
                });
           }
      };
});