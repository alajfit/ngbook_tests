/***
 * Simple Module Setup
 * ----------------------------
 * Anuglar has a module API
 * This is used with the angular.module() API method
 * Two Paramters are passed to the module API
 *  1. The first is the name of the module
 *  2. The second is any depencies also know as injectables
 *      - These are functions or data that the app will require internally to work
 * When writing large applications there will be multiple modules
 ***/

 /***
  * Scopes of a module
  * ------------------------
  * The scope is the glue between the controller and the view
  * The scope is a direct reference to the model
  * Expressions base their content from the scope object
  * If the view changes the scope is immediately updated
  * If the scope is updated the view is immediately updated
  * There is a new scope at each level of directive
  * Rootscope is created at the ng-app level and Scope is then a child of the root scope
  * $rootscope is the equiv of a global element
  *
  * When a controller or directive is created a new scope is also created
  ***/

  /***
   * Controllers
   * -------------------------
   * Controllers augment the view of an Angular JS App
   * Angular sets up the controller and all we need to do is call the setter
   * Is is best practive to setup controllers with name[controller]
   *
   ***/

// This is the setter method of an angular module
var app = angular.module('myApp', []);

/* An exmaple of using the rootscope to change variables from within a module
angular.module('anApp' [])
  .run(function($rootScope) {
      $rootScope.name = 'In';
});*/
// We can also get the module with **** angular.module('myApp'); **** this is the getter

app.controller('MyController', function($scope) {
  $scope.clock = {
    now: new Date()
  };
  var updateClock = function() {
    $scope.clock.now = new Date()
  };
  setInterval(function(){
    $scope.$apply(updateClock); // When outside of the scope we can force changes using apply
  }, 1000);
  updateClock();
});
