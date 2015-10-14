/***
 * Using internal functions with expressions
 * -----------------------------------------
 * Generally parsing is covered by the digest procedure inside of angular
 * Here we are going to using the parse with a little override of our own
 * This is done through injection to the directive
 *
 * ---------------------
 * Extra
 * ---------------------
 * This is the standard setup of a controller and its layout
 ***/

angular.module('app', [])
  .controller('myController',
  function($scope, $parse) { // Here we pass the function the $scope and the internal $parse function to work with, this allows manual parsing
      $scope.person = {
        name: 'Alan'
      };
      $scope.$watch('expr', function(newVal, oldVal, scope){ // Watch allows us to add fields to the digest for watching changes
        if(newVal !== oldVal) {
          var parseFun = $parse(newVal);
          $scope.parsedValue = parseFun(scope); // We are only manually parsing the value so we can control output to the view
        }
      });
  })
  // the main use of this is to add the email box to the text area using an expression e.g. add {{ to }} within the textarea to see
  .controller('interpolateController',
  function($scope, $interpolate){
      // now we have acccess to the scope and the interpolate functions
      $scope.$watch('emailBody', function(body) {
        if(body) {
          var template = $interpolate(body);
          $scope.previewText = template({ to: $scope.to });
        }
      });
  });
