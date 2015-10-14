<?php
  /***
   * Basics of Data Binding
   * ----------------------------------
   *  This example is purely for demonstration
   *  Here we can see how the controller is used poorly
   *  We have bound the view and model together
   *  ng-app is a directive and implies everything inside is part of the app
   *  Any model values are added to the $scope object
   ***/
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Angular Hello World</title>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js'></script>
  </head>

  <body>
    <input ng-model='name' type='text' placeholder='Your Name' />
    <h1>Hello {{ name }}</h1>

    <div ng-app>
      <input ng-model='name' type='text' placeholder='Your Name' />
      <h1>Hello {{ name }}</h1>
    </div>
  </body>
</html>
