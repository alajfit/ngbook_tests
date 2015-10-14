<?php
  /***
   * Expressions in the View
   * ---------------------------------------
   * - Expressions only work within their current local scope
   * - Expressions will not throw errors if not found or misspelt
   * - No control functionality are supported such as if statements
   * - Expressions can filter and filter chain their contents
   ***/
?>

<!DOCTYPE html>
<html ng-app='app'>
  <head>
    <title>Angular Hello World</title>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js'></script>
  </head>

  <body>
    <div ng-controller='myController'>
      <input  ng-model='expr'
              type='text'
              placeholder='Expression' />
      <h2>{{ parsedValue }}</h2>
    </div>

    <br /><br />

    <div ng-controller='interpolateController'>
      <input  ng-model='to'
              type='email'
              placeholder='Recipient' /><br /><br />
      <textarea ng-model='emailBody'></textarea>
      <pre>{{ previewText }}</pre>
    </div>

    <script src='main.js'></script>
  </body>
</html>
