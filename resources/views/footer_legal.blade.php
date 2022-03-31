<footer>
    <div>
        <div class="lang__select lang__select__footer">
            <select class="select__lang select__lang_footer" id="lang2">
                <option @if ( Config::get("app.locale") == 'en') selected @endif value="en">English</option>
                <option @if ( Config::get("app.locale") == 'in-hi') selected @endif value="hi">हिन्दी</option>
            </select>
        </div>
    </div>
    <ul class="footer_list">
        <li><a href="{{__('language.termsofusel')}}" class="footer_text footer_a">{{__('language.footer10')}}</a></li>
        <li><a href="{{__('language.privacyl')}}" class="footer_text footer_a">{{__('language.footer11')}}</a></li>
        <li><a href="#" class="footer_text footer_a">{{__('language.footer12')}}</a></li>
        <li><a href="{{__('language.corpinfol')}}" class="footer_text footer_a">{{__('language.footer13')}}</a></li>
    </ul>
</footer>
<script src="/js/legal.js"></script>