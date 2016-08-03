define(['js/app'], function(app) {
  return app.registerController('wx.index', [
    '$scope', '$rootScope', '$location', function($scope, $rootScope, $location) {
      var $myOc, effectiveTime, id, lastTime, rvm;
      rvm = $scope;
      rvm.title = 'hello'
      return rvm;
    }
  ]);
});
