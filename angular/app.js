'use strict';
var app = angular.module("myApp", ['ngRoute', 'myApp.home', 'ngResource']);

app.config(['$routeProvider', function($routeProvider) {
    // Set defualt view of our app to home     
    $routeProvider.otherwise({
        redirectTo: '/home'
    });
}]);

app.controller('MyCtrl', function($scope, $http, $templateCache) {

});