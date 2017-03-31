angular.module('portfolio')
  .controller('HomeController', HomeController);

HomeController.$inject = ['$scope'];

function HomeController($scope) {
  $scope.toType = "Purpose";
}
