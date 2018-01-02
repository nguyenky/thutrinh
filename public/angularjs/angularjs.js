var app = angular.module('myApp',[]);
app.factory('_', function() {
		return window._; // assumes underscore has already been loaded on the page
	});  