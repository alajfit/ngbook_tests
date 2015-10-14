<?php
  /***
   * Form Validation with Angular
   * ---------------------------------------
   * - This classes are added based on the current state
   * - .ng-pristine {} .ng-dirty {} .ng-valid {} .ng-invalid {}
   ***/
?>

<!DOCTYPE html>
<html ng-app='app'>
  <head>
    <title>Angular Hello World</title>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js'></script>

    <style>
      input.ng-invalid {
        border: 1px solid red;
      }
      input.ng-valid {
        border: 1px solid green;
      }
    </style>
  </head>

  <body>
    <div ng-controller='formController'>
      <form name='form' method='post' novalidate>
        <label name='email'>Your Email</label><br />
        <input type='email' ng-minlength=5 name='email' ng-model='email' plceholder='Email Address' required />
        <input type='submit' value='sub' />
      </form>
    </div>

    <script src='main.js'></script>
  </body>
</html>
