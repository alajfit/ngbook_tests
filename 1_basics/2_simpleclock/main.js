/***
 * Here we setup the Controller function
 * This will be autocalled from the ng-controller element when this file is called
 * From here we get the time and update the scope
 */

// Important to note this is a single function and not a module
function MyController($scope) {
  $scope.clock = {
    now: new Date()
  };
  var updateClock = function() {
    $scope.clock.now = new Date()
  };
  setInterval(function(){
    $scope.$apply(updateClock);
  }, 1000);
  updateClock();
}
