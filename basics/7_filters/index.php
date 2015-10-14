<?php
  /***
   * Filters on the view
   * ---------------------------------------
   * - Anuglar has many built in filters
   * - We can also build out filters as per the JS file
   ***/
?>

<!DOCTYPE html>
<html ng-app='app'>
  <head>
    <title>Angular Hello World</title>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js'></script>
  </head>

  <body>
    <div ng-controller='DemoController'>
      <p>{{ name }}</p>
      <p>{{ output }}</p>

      <br />
      <input type='text' ng-model='money' /> <p>{{ money | currency }}</p>

      <br />
      <p>{{ 123.32334 | number:2 }}</p><!-- To pass a value to a filter use the colon -->

      <br />
      <!-- This filter allows us to call the filter funtion and pass required characters -->
      <p>{{ ['test', '123', 'blah', 'testing'] | filter:'e' }}</p>

      <br />
      <p>{{ 'HellO WoRLD' | lowercase | capitalize }}</p>
    </div>

    <script src='main.js'></script>
  </body>
</html>
