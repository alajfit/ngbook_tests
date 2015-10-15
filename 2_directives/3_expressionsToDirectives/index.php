<?php
 /***
  * Isolate Scope
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
    <!-- IMPORTANT THINGS TO NOTE
         If you use an element as the directive only one will be replaced per page on IE so its best to avoid
         You can pass expressions to angular directives to then pass into directive output -->
    <my-directive my-url=' {{ "http://" + "www.beingsuperhuman.com" }} ' my-link-text='To My Home Page'>

    </my-directive>
    <br />
    <div my-directive my-url='http://www.google.com' my-link-text='Click here to go to Google'>
      <p>Hi Directive, I will be replace by you.<p>
    </div>

    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js'></script>
    <script src='main.js'></script>
  </body>
</html>
