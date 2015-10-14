<?php
  /***
   * Scope levels - Parent and child
   * ---------------------------------------
   * Here we can see the scope of the parent is also the scope of the child
   * This is due to prototypical behaviour
   * Child inherits all the attributes of the parent here
   * The child checks if it has defined a variable if not it will inherit from the parent
   *  - when this happens all changes are passed to the parent
   * Controllers are nested just like DOM elements, Important to note this 
   ***/
?>

<!DOCTYPE html>
<html ng-app='app'>
  <head>
    <title>Angular Hello World</title>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js'></script>
  </head>

  <body>
    <div ng-controller='ParentController'>
      <div ng-controller='ChildController'>
        <a ng-click='sayHello()'>Say Hello</a>
      </div>
      {{ person }}
    </div>

    <script src='main.js'></script>
  </body>
</html>
