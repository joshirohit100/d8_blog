'use strict';
 
var home = angular.module('myApp.home', ['ngRoute', 'ngResource']);
 
// Declared route 
home.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/home', {
    templateUrl: 'home/home.html',
    controller: 'HomeCtrl'
  });
}]);
 
// Home controller
home.controller('HomeCtrl', ['$scope', '$http', function($scope, $http, $templateCache) {
  var req = {
  method: 'POST',
  url: 'http://gis04663.devcloud.ge.com/eeview/content/jsonnode/policies',
  data: { roles:["GE_HMV_ACT"],
    countries:["HVW"],
    business:["1299114","1160170"], 
    location:["5122"],
    band:["EB"] }
  }

  $http(req).then(function(response){
    $scope.tree = response.data;
    testfunction();
    console.log($scope.tree.term);
  }, 
  function(response){
    console.log(response);
  });
}]);

function testfunction() {
  console.log('hello');
}