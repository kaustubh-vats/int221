<footer>
    <div>
        <div class="footer_text footer_top">{{__('language.footer1')}} <a href="tel:+91-92587-12650" class="footer_a">+91-92587-12650</a> {{__('language.footer2')}}</div>
        <ul class="footer_list">
            <li><a href="https://help.netflix.com/support/412" class="footer_text footer_a">{{__('language.footer3')}}</a></li>
            <li><a href="https://help.netflix.com/" class="footer_text footer_a">{{__('language.footer4')}}</a></li>
            <li><a href="#" class="footer_text footer_a">{{__('language.footer5')}}</a></li>
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
            <li><a href="" class="footer_text footer_a">{{__('language.footer17')}}</a></li>
        </ul>
        <div class="lang__select lang__select__footer">
            <select class="select__lang select__lang_footer" id="lang2">
                <option value="en" @if ( Config::get("app.locale") == 'en') selected @endif>English</option>
                <option value="hi" @if ( Config::get("app.locale") == 'in-hi') selected @endif>हिन्दी</option>
            </select>
        </div>
        <div class="footer_text copyrt">{{__('language.footerCopy')}}</div>
    </div>
</footer>
<script src="/js/script.js"></script>
