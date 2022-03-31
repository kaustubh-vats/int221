<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="/css/nflx.css" data-uia="botLink">
    <link rel="shortcut icon" href="/imgs/favicon.ico"/>
    <link rel="stylesheet" href="/css/login.css"/>
    <link rel="stylesheet" href="/css/header.css"/>
    <title>Netflix</title>
</head>
<body>
<div class="login_container">
    <div class="imgcont">
        <img class="bg_img" src="/imgs/bg-hi.jpg" alt="">
        <div class="shadow"></div>
    </div>
    <div class="main_login">
        <div class="form_login">
            <h1 class="frm_title">{{__('language.signInBtn')}}</h1>
            <form action="" method="post">
                <div class="form_group">
                    <input class="login_inp" id="email" type="text" name="username" placeholder="{{__('language.emailorphone')}}" onfocusin="inputfocused()" onfocusout="inputfocusout()"required>
                    <label id="hero_label" class="hero__label" for="email_entry">{{__('language.emailorphone')}}</label>
                    <label id="warning_label" class="warning_label"></label>
                </div>
                <div class="form_group">
                    <input class="login_inp" id="password" type="password" name="password" placeholder="{{__('language.password')}}" onfocusin="inputfocused2()" onfocusout="inputfocusout2()"required>
                    <span id="showPasswordBtn" onclick="showPass(this)">{{__('language.show')}}</span>
                    <label id="hero_label2" class="hero__label" for="password_entry">{{__('language.password')}}</label>
                    <label id="warning_label2" class="warning_label"></label>
                </div>
                <div class="form_group">
                    <input type="submit" name="submit" value="{{__('language.signInBtn')}}" class="btn_login">
                </div>
                <div class="form_group2">
                    <div class="remember">        
                        <input type="checkbox" id="remeber" name="remember" value="remember" checked>
                        <label class="labels" for="remember">{{__('language.rememberme')}}</label><br>
                    </div>
                    <a href="https://www.netflix.com/in-hi/LoginHelp" class="labels">{{__('language.needhelp')}}</a>
                </div>
            </form>
            <div class="fb_login">
                <img src="/imgs/fb_login.png" class="fb_logo" alt=""> 
                <span>{{__('language.fbsignin')}}</span>
            </div>
            <div class="new_to_netflix">
                {{__("language.newtonflx")}} <a href=@if( Config::get("app.locale") == 'en') "/" @else "/in-hi/" @endif>{{__('language.signupnow')}}</a>
            </div>
            <div class="recaptcha">
                {!!__('language.captcha')!!}
            </div>
        </div>
    </div>
    <svg viewBox="0 0 111 30" class="logo_netflix" focusable="false"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg>
    <footer>
    <div>
        <div class="footer_text footer_top">{{__('language.footer1')}} <a href="tel:+91-92587-12650" class="footer_a">+91-92587-12650</a> {{__('language.footer2')}}</div>
        <ul class="footer_list">
            <li><a href="https://help.netflix.com/support/412" class="footer_text footer_a">{{__('language.footer3')}}</a></li>
            <li><a href="https://help.netflix.com/" class="footer_text footer_a">{{__('language.footer4')}}</a></li>
            <li><a href=@if( Config::get("app.locale") == 'en') "/termsofuse" @else "/in-hi/termsofuse" @endif class="footer_text footer_a">{{__('language.footer10')}}</a></li>
            <li><a href=@if( Config::get("app.locale") == 'en') "/privacy" @else "/in-hi/privacy" @endif class="footer_text footer_a">{{__('language.footer11')}}</a></li>
            <li><a href="#" class="footer_text footer_a">{{__('language.footer12')}}</a></li>
            <li><a href=@if( Config::get("app.locale") == 'en') "/corpinfo" @else "/in-hi/corpinfo" @endif class="footer_text footer_a">{{__('language.footer13')}}</a></li>
        </ul>
        <div class="lang__select lang__select__footer">
            <select class="select__lang select__lang_footer" id="lang2">
                <option value="en"  @if ( Config::get("app.locale") == 'en') selected @endif>English</option>
                <option value="hi"  @if ( Config::get("app.locale") == 'in-hi') selected @endif>हिन्दी</option>
            </select>
        </div>
        <div class="footer_text copyrt">{{__('language.footerCopy')}}</div>
    </div>
</footer>
<script src="/js/script_login.js"></script>
</body>
</html>