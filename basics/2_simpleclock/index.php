<?php
  /***
   * Simple Clock Setup
   * -------------------------
   *  Here we are adding a controller to the application
   *  This is very similar to the ng-app in that it only works on the inner elements
   *  This is a directive for this section of the app
   *  Directives declare where the app should work on the page
   ***/
?>

<!DOCTYPE html>
<html ng-app>
  <head>
    <title>Angular Hello World</title>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js'></script>
  </head>

  <body>
    <div ng-controller='MyController'>
      <h5> {{ clock.now }} </h5>
    </div>

    <script src='main.js'></script>
  </body>
</html>
