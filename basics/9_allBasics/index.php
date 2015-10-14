<?php
  /***
   * All Basics together
   * ---------------------------------------
   * -
   ***/
?>

<!DOCTYPE html>
<html ng-app='app'>
  <head>
    <title>Angular Hello World</title>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js'></script>
    <link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css' />

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
    <row>
      <div class='large-12 columns'>
        <form name='signup_form' novalidate ng-submit='signupForm()' ng-controller="signupController">
          <fieldset>
            <legend>Signup</legend>

            <!-- Name input for the form -->
            <div class='row'>
              <div class='large-12 columns'>
                <label>Your Name</label>
                <input type='text'
                       placeholder='Name'
                       name='name'
                       ng-model='signup.name'
                       ng-minlength=3
                       ng-maxlength=20 required />
                <div class='error' ng-show='signup_form.name.$dirty && signup_form.name.$invalid  && signup_form.submitted'>
                  <small class='error' ng-show="signup_form.name.$error.required">Your name is required</small>
                  <small class="error" ng-show="signup_form.name.$error.minlength">Your name is required to be at least 3 characters</small>
                  <small class="error" ng-show="signup_form.name.$error.maxlength">Your name cannot be longer than 20 characters</small>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="large-12 columns">
                <label>Your email</label>
                <input type="email"
                       placeholder="Email"
                       name="email"
                       ng-model="signup.email"
                       ng-minlength=3 ng-maxlength=20 required />
                <div class="error" ng-show="signup_form.email.$dirty && signup_form.email.$invalid  && signup_form.submitted">
                  <small class="error" ng-show="signup_form.email.$error.required"> Your email is required.</small>
                  <small class="error" ng-show="signup_form.email.$error.minlength">Your email is required to be at least 3 characters</small>
                  <small class="error" ng-show="signup_form.email.$error.email">That is not a valid email. Please input a valid email.</small>
                  <small class="error" ng-show="signup_form.email.$error.maxlength"> Your email cannot be longer than 20 characters</small>
                </div>
              </div>
            </div>

            <div class="large-12 columns">
              <label>Username</label>
              <input type="text" placeholder="Desired username"
                                 name="username" ng-model="signup.username" ng-minlength=3
                                 ng-maxlength=20 ensure-unique="username" required />
              <div class="error" ng-show="signup_form.username.$dirty && signup_form.username.$invalid  && signup_form.submitted">
                <small class="error" ng-show="signup_form.username.$error.required"> Please input a username</small>
                <small class="error" ng-show="signup_form.username.$error.minlength">Your username is required to be at least 3 characters</small>
                <small class="error" ng-show="signup_form.username.$error.maxlength">Your username cannot be longer than 20 characters</small>
                <small class="error" ng-show="signup_form.username.$error.unique">That username is taken, please try another</small>
              </div>
            </div>

            <button type='submit' class='button radius'>Submit</button>
          </fieldset>
        </form>
      </div>
    <row>

    <script src='main.js'></script>
  </body>
</html>
