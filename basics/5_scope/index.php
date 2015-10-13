<?php
  /***
   * Scope levels - Parent and child
   * ---------------------------------------
   *
   *
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
