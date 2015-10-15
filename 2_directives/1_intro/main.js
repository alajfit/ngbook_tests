/***
 * within the directive we need to use pascalCased
 * This should reflect the directive in the HTML
 *
 * Directives can be elements or attributes
 * Declaring a directive is the act of placing a function within our HTML as an element, attribute, class, or comment.
 *
 * - The following are valid formats for declaring the directive
      <my-directive></my-directive>
      <div my-directive></div>
      <div class="my-directive"></div>
      <!-- directive: my-directive -->

 * It is good to know it is best to use a directive as an attribute
 * - This is the most compatable
 ***/

var app = angular.module('myApp', [])
  .directive('myDirective', function() { // We use camel Case to hook onto the directive
    return { // When making a directive we must always return an object
      restrict: 'E', // This tells angular what to look for e.g. element (E), an attribute (A), a class (C), or a comment (M) - this can be 'E' or even 'EAC'
      replace: true, // This will replace the directive content and the directive element completely
      template: '<a href="http://www.google.com">Click me to go to Google</a>' // This will be the HTML output to the directive
    }
  });
