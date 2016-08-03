define(['angular', 'js/config', 'angularLazyLoad', 'angularUIRouter', 'js/core/coreLoader'], function(ng, config, lazyLoad) {
  var app;
  app = ng.module('app', ['ui.router', 'scs.couch-potato']);
  lazyLoad.configureApp(app);
  app.config([
    '$stateProvider', '$urlRouterProvider', '$locationProvider', '$couchPotatoProvider', function($stateProvider, $urlRouterProvider, $locationProvider, $couchPotatoProvider) {
      var states,results;
      $locationProvider.html5Mode(true);
      states = config.states;
      results = [];
      for (i = 0, len = states.length; i < len; i++) {
        results.push($stateProvider.state(states[i].state, {
          url: states[i].url,
          templateUrl: states[i].templateUrl,
          controller: states[i].controller,
          controllerAs: states[i].ctrlName,
          resolve: {
            l: $couchPotatoProvider.resolveDependencies(states[i].depPath)
          }
        }));
      }
      return results;
    }
  ]).run([
    '$couchPotato', '$rootScope', '$state', '$location', function($couchPotato, $rootScope, $state, $location) {
      app.lazy = $couchPotato;
      $rootScope.isLogined = false;
      return $rootScope.$on('$stateChangeStart', function(event, next, params, current) {
        return console.log(params);
      });
    }
  ]);
  return app;
});
