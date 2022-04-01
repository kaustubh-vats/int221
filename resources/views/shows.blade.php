<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('language.showsTitle')}}</title>
    <link type="text/css" rel="stylesheet" href="/css/nflx.css" data-uia="botLink">
    <link rel="shortcut icon" href="/imgs/favicon.ico"/>
    <link rel="stylesheet" href="/css/legal_header.css"/>
    <link rel="stylesheet" href="/css/show.css"/>
    <link rel="stylesheet" href="/css/footer.css"/>
</head>
<body>
<header>
    <div class="title_cont">
        <svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="false"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg>
    </div>
    <div class="header__container">
        <p>{{__('language.shows1')}}</p> 
        <a href=@if( Config::get("app.locale") == 'en') "/" @else "/in-hi/" @endif class="join_netflix">
            @if(request()->session()->has('email'))
                {{__('language.gotohome')}}
            @else 
                {{__('language.joinNetflix')}}
            @endif
        </a>
        <a href=@if( Config::get("app.locale") == 'en') "/login" @else "/in-hi/login" @endif><button class="button_login">
            @if(request()->session()->has('email'))
                {{__('language.signOutBtn')}}
            @else 
                {{__('language.signInBtn')}}
            @endif
        </button></a>
    </div>
</header>
<div class="main">
    <div class="top">
        <h1>{{__('language.shows2')}}</h1>
        <p>{{__('language.shows3')}}</p>
    </div>
    <?php
        for($i=0;$i<count($shows);$i++){
            echo '<div class="listArr">';
            echo '<h4 class="listTitle">'.$shows[$i]['genre'].'</h4>';
            echo '<div class="list_cont">';
            $genreShows = $shows[$i]['shows'];
            for($j=0;$j<count($genreShows);$j++){
                echo '<a class="list_card" href="'.$genreShows[$j]['link'].'">';
                echo '<img class="list_img" src="'.$genreShows[$j]['image'].'" alt="'.$genreShows[$j]['name'].'">';
                echo '<p class="series_title">'.$genreShows[$j]['name'].'</p>';
                echo '</a>';
            }
            echo '</div>';
            echo '</div>';
        }
        
        //   echo '<div class="listArr">';
        //   echo '<h4 class="listTitle">'.$row['genre'].'</h4>';
        //   echo '<div class="list_cont">';
        //   while($row1 = $result1->fetch_assoc()){
        //     echo '<a class="list_card" href="'.$row1['link'].'">';
        //     echo '<img class="list_img" src="'.$row1['image'].'" alt="'.$row1['Name'].'">';
        //     echo '<p class="series_title">'.$row1['Name'].'</p>';
        //     echo '</a>';
        //   }
        //   echo '</div>';
        //   echo '</div>';
    ?>
</div>
<footer>
    <div>
        <div class="footer_text footer_top"><a href="https://help.netflix.com/contactus" class="footer_a">Questions? Contact us.</a></div>
        <ul class="footer_list">
        <li><a href="https://help.netflix.com/support/412" class="footer_text footer_a">{{__('language.footer3')}}</a></li>
            <li><a href="https://help.netflix.com/" class="footer_text footer_a">{{__('language.footer4')}}</a></li>
            <li><a href=@if( Config::get("app.locale") == 'en') "/account" @else "/in-hi/account" @endif class="footer_text footer_a">{{__('language.footer5')}}</a></li>
            <li><a href="https://media.netflix.com/" class="footer_text footer_a">{{__('language.footer6')}}</a></li>
            <li><a href="/ir-overview" class="footer_text footer_a">{{__('language.footer7')}}</a></li>
            <li><a href="https://jobs.netflix.com/jobs" class="footer_text footer_a">{{__('language.footer8')}}</a></li>
            <li><a href="https://www.netflix.com/watch" class="footer_text footer_a">{{__('language.footer9')}}</a></li>
            <li><a href=@if( Config::get("app.locale") == 'en') "/termsofuse" @else "/in-hi/termsofuse" @endif class="footer_text footer_a">{{__('language.footer10')}}</a></li>
            <li><a href=@if( Config::get("app.locale") == 'en') "/privacy" @else "/in-hi/privacy" @endif class="footer_text footer_a">{{__('language.footer11')}}</a></li>
            <li><a href="#" class="footer_text footer_a">{{__('language.footer12')}}</a></li>
            <li><a href=@if( Config::get("app.locale") == 'en') "/corpinfo" @else "/in-hi/corpinfo" @endif class="footer_text footer_a">{{__('language.footer13')}}</a></li>
            <li><a href="https://kaustubhvats-portfolio.netlify.app/#contact" target="_blank" class="footer_text footer_a">{{__('language.footer14')}}</a></li>   
            <li><a href="https://fast.com/" class="footer_text footer_a">{{__('language.footer15')}}</a></li>
            <li><a href=@if( Config::get("app.locale") == 'en') "/notices" @else "/in-hi/notices" @endif class="footer_text footer_a">{{__('language.footer16')}}</a></li>
            <li><a href=@if( Config::get("app.locale") == 'en') "/shows" @else "/in-hi/shows" @endif class="footer_text footer_a">{{__('language.footer17')}}</a></li>
        </ul>
        <div class="lang__select lang__select__footer">
            <select class="select__lang select__lang_footer" id="lang2">
                <option value="en" @if ( Config::get("app.locale") == 'en') selected @endif>English</option>
                <option value="hi" @if ( Config::get("app.locale") == 'in-hi') selected @endif>हिन्दी</option>
            </select>
        </div>
        <div class="footer_text copyrt">Netflix India Clone</div>
    </div>
</footer>
<script src="/js/script-shows.js"></script>

</body>
</html>