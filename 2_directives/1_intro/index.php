<?php
 /***
  * Setting up a Basic Directive
  * ----------------------------
  * On the element directives should always be (shortref)-Directive
  ***/
?>

<!DOCTYPE html>
<html ng-app='myApp'>
  <head>
    <title>Directives</title>

  </head>

  <body>
    <my-directive>
      <p>Hi Directive, I will be replace by you.<p>
    </my-directive>

    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js'></script>
    <script src='main.js'></script>
  </body>
</html>
