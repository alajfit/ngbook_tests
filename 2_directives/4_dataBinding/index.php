<?php
 /***
  * Data Binding
  * ----------------------------
  * ng-model has its own isolate scope
  ***/
?>

<!DOCTYPE html>
<html ng-app='myApp'>
  <head>
    <title>Directives</title>

  </head>

  <body>
    <label>Their URL field:</label>
    <input type="text" ng-model="theirUrl">
    <div my-directive some-attr="theirUrl" my-link-text="Click me to go to Google"></div>

    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js'></script>
    <script src='main.js'></script>
  </body>
</html>
