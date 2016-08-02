var bowerPath;

bowerPath = '../../vendor/bower/';

require.config({
  baseUrl: '/build',
  paths: {
    angular: bowerPath + 'angular/angular.min',
    angularUIRouter: bowerPath + 'angular-ui-router/release/angular-ui-router.min',
    angularLazyLoad: bowerPath + 'angular-couch-potato/dist/angular-couch-potato',
    jquery: bowerPath + 'jquery/dist/jquery.min',
    base64: bowerPath + 'js-base64/base64.min',
    md5: bowerPath + 'blueimp-md5/js/md5.min',
    angucomplete: bowerPath + 'angucomplete/angucomplete',
    js: '../js'
  },
  shim: {
    angular: {
      deps: ['jquery'],
      exports: 'angular'
    },
    angularLazyLoad: ['angular'],
    angularUIRouter: ['angular']
  },
  deps: ['awes/bootstrap'],
  urlArgs: 'v={timestamp}'
});
