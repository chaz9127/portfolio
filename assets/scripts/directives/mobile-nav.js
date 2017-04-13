angular.module('portfolio')
.directive('mobileNav', mobileNavDirective);

mobileNavDirective.$inject = [];

function mobileNavDirective() {
  function link(scope, elem, attrs) {
    var menu = document.getElementById('krabby-patty-menu-icon');
    menu.onclick = function() {
      elem[0].style.display = 'block';
    }

    scope.hideNav = function(e) {
      elem[0].style.display = 'none';
    }
  };
  return {
    restrict: 'A',
    link: link,
    templateUrl: 'assets/templates/mobile-nav.html'
  };
}
