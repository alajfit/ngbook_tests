/***
 *
 ***/

var app = angular.module('myApp', [])
  .directive('myDirective', function() { // We use camel Case to hook onto the directive
    return { // When making a directive we must always return an object
      restrict: 'AE', // This tells angular what to look for e.g. element (E), an attribute (A), a class (C), or a comment (M) - this can be 'E' or even 'EAC'
      replace: true, // This will replace the directive content and the directive element completely
      scope: { // This is an isolate scope and is only for this directive call
        myUrl: '=someAttr',
        myLinkText: '@' // the @ allows us to bing to elements on the DOM
      },
      template: '\
          <div>\
            <label>My Url Field:</label>\
            <input type="text"\
              ng-model="myUrl" />\
            <a href="{{myUrl}}">{{myLinkText}}</a>\
      </div>\
      ' // This will be the HTML output to the directive
    }
  });
