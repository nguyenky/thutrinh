var app = angular.module('myApp',[]);
app.factory('_', ['$window', function() {
   return $window._;
 }]);