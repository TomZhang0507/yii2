define(['jquery'], function() {
  mainConfig = {
    debug: false,
    states: [
      {
        state: 'WxIndex',
        url: '/wx/index',
        depPath: ['/js/controllers/WxIndexCtrl.js'],
        templateUrl: '/partials/wx/index.html',
        controller: 'wx.index',
        ctrlName: 'WxIndex',
      }
    ]
  };

  return mainConfig;
});
