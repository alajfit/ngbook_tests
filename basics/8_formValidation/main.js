var app = angular.module('app', [])
          .controller('formController', ['$scope', function($scope) {
            $scope.name= 'Alan';
          }])
          // This is a login check on a login page
          .directive('ensureUnique', function($http){ // Adding the $http function to allow simple calls
            return {
              require: 'ngModel',
              link: function(scope, ele, attrs, c) {
                scope.$watch(attrs.ngModel, function() {
                  $http({ // this is how a POST request is sent with Angular
                    method: 'POST',
                    url: '/api/check/' + attrs.ensureUnique,
                    data: {'field': attrs.ensureUnique}
                  }).success(function(data,status,headers,cfg){ // This is how you control a successful response
                    c.$setValidity('unique', data.isUnique);
                  }).error(function(data,status,headers,cfg){ // This is how you control an error
                    c.$setValidity('unique', false);
                  });
                });
              }
            }
          })
