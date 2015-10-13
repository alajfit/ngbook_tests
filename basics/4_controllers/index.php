<?php
  /***
   * Using Controllers and Ng-click
   * ---------------------------------------
   * ng-click will bind the click actions to the scope
   * Here the directive / controller scope is active and the function add or subtract will be used
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
    <div ng-controller="FirstController">
      <h4>The simplest adding machine ever</h4>
      <button ng-click="add(1)" class="button">Add</button><br />
      <a ng-click="subtract(1)" class="button alert">Subtract</a> <h4>Current count: {{ counter }}</h4>
    </div>

    <script src='main.js'></script>
  </body>
</html>
