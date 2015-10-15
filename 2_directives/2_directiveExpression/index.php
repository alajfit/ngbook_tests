<?php
 /***
  * Directive with Expression
  * ----------------------------
  *
  * Valid use of Expressions with Directives
    <my-directive="someExpression"> </my-directive>
    <div my-directive="someExpression"> </div>
    <div class="my-directive:someExpression"> </div>
    <!-- directive: my-directive someExpression -->
  ***/
?>

<!DOCTYPE html>
<html ng-app='myApp'>
  <head>
    <title>Directives</title>


    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js'></script>
    <script src='main.js'></script>
  </head>

  <body>
    <p>We can access: {{ rootProperty }}</p>

    <div ng-controller='ParentController'>
      <p>We can access: {{ rootProperty }} and {{ parentProperty }}</p>

      <div ng-controller='ChildController'>
        <p>We can access: {{ rootProperty }} and {{ parentProperty }} and {{ childProperty }}</p>
        <p>{{ fullSentenceFromChild }}</p>
      </div>
    </div>
  </body>
</html>
