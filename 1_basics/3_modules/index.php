<?php
  /***
   * Simple Module Setup
   * -------------------------
   * There can be multiple modules to break up all the jobs of the app
   *
   *  Using modules keeps us from the global namespace
   *  Keeps the Code clean
   *  Makes testing easier
   *  Makes it easier to share code between applications
   *  Also allows the app to load different parts at different times 
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
