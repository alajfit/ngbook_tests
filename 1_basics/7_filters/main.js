/***
 * Filters from a controller side
 * ------------------------------
 * Here we setup a watch on the inital name value
 * When a value is entered we are watching
 * Then the value is change with the give value
 *
 * Important note here is defining the function names prior to the function call as during minification these will change
 ***/

var app = angular.module('app', [])
          .controller('DemoController', ['$scope', '$filter',
          function($scope, $filter){
            $scope.name = 'Alan';
            $scope.$watch('name', function(newVal, oldVal, scope) {
              $scope.output = $filter('lowercase')(newVal);
            });
          }])
          // Here we create a filter and add it to this module
          // This filter will return the input with the first letter capitalized
          .filter('capitalize', function(){
            return function(input) {
              if(input)
                return input[0].toUpperCase() + input.slice(1);
            }
          });
