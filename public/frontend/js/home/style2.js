function setREVStartSize(e) {
    //window.requestAnimationFrame(function() {
    window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
    window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
    try {
    var pw = document.getElementById(e.c).parentNode.offsetWidth,
    newh;
    pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
    e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
    e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
    e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
    e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
    e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
    e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
    e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
    if (e.layout === "fullscreen" || e.l === "fullscreen")
    newh = Math.max(e.mh, window.RSIH);
    else {
    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
    for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
    for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

    var nl = new Array(e.rl.length),
    ix = 0,
    sl;
    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
    sl = nl[0];
    for (var i in nl) if (sl > nl[i] && nl[i] > 0) {
    sl = nl[i];
    ix = i;
}
    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
}
    if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
    document.getElementById(e.c).height = newh + "px";
    window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
} catch (e) {
    console.log("Failure at Presize of Slider:" + e)
}
    //});
}

window.OneSignal = window.OneSignal || [];

OneSignal.push(function () {
    OneSignal.SERVICE_WORKER_UPDATER_PATH = "OneSignalSDKUpdaterWorker.js.php";
    OneSignal.SERVICE_WORKER_PATH = "OneSignalSDKWorker.js.php";
    OneSignal.SERVICE_WORKER_PARAM = {scope: '/'};

    OneSignal.setDefaultNotificationUrl("https://shopmc.com.vn");
    var oneSignal_options = {};
    window._oneSignalInitOptions = oneSignal_options;

    oneSignal_options['wordpress'] = true;
    oneSignal_options['appId'] = '8a75cce5-e162-4653-a260-bf9fa891f793';
    oneSignal_options['allowLocalhostAsSecureOrigin'] = true;
    oneSignal_options['welcomeNotification'] = {};
    oneSignal_options['welcomeNotification']['title'] = "";
    oneSignal_options['welcomeNotification']['message'] = "Cảm ơn bạn đã đăng ký";
    oneSignal_options['path'] = "https://shopmc.com.vn/wp-content/plugins/onesignal-free-web-push-notifications/sdk_files/";
    oneSignal_options['safari_web_id'] = "web.onesignal.auto.4979c8f7-1397-4bb3-8d4b-5aebacc6595c";
    oneSignal_options['promptOptions'] = {};
    oneSignal_options['notifyButton'] = {};
    oneSignal_options['notifyButton']['enable'] = true;
    oneSignal_options['notifyButton']['position'] = 'bottom-right';
    oneSignal_options['notifyButton']['theme'] = 'default';
    oneSignal_options['notifyButton']['size'] = 'medium';
    oneSignal_options['notifyButton']['showCredit'] = true;
    oneSignal_options['notifyButton']['text'] = {};
    oneSignal_options['notifyButton']['text']['tip.state.subscribed'] = 'Bạn đã đăng ký';
    oneSignal_options['notifyButton']['text']['message.action.subscribed'] = 'Cảm ơn bạn đã theo dõi';
    oneSignal_options['notifyButton']['text']['dialog.main.title'] = 'Đăng ký nhận thông tin';
    oneSignal_options['notifyButton']['text']['dialog.main.button.subscribe'] = 'Đăng ký';
    oneSignal_options['notifyButton']['text']['dialog.main.button.unsubscribe'] = 'Hủy đăng ký';
    OneSignal.init(window._oneSignalInitOptions);
    OneSignal.showSlidedownPrompt();
});

function documentInitOneSignal() {
    var oneSignal_elements = document.getElementsByClassName("OneSignal-prompt");

    var oneSignalLinkClickHandler = function (event) {
        OneSignal.push(['registerForPushNotifications']);
        event.preventDefault();
    };
    for (var i = 0; i < oneSignal_elements.length; i++)
        oneSignal_elements[i].addEventListener('click', oneSignalLinkClickHandler, false);
}

if (document.readyState === 'complete') {
    documentInitOneSignal();
} else {
    window.addEventListener("load", function (event) {
        documentInitOneSignal();
    });
}
