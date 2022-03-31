<div class="tv__container" id="faq">
    <div class="faq__container">
        <h1 class="faq__title">{{__('language.faqTitle')}}</h1>
        <div class="faq__list">
            <div class="faq__list_item">
                <button class="main__list_bar" onclick="toggleExpand(1)">
                    <h1 class="faq__list_title">{{__('language.faq1')}}</h1>
                    <svg id="svg1" viewBox="0 0 26 26" class="svg-icon thin-x svg_closed" focusable="true">
                        <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z"></path>
                    </svg>
                </button>
                <div id="desc1" class="closed faq__desc">
                    {{__('language.faq2')}} 
                    <br />
                    <br />
                    {{__('language.faq3')}}
                </div>
            </div>
            <div class="faq__list_item">
                <button class="main__list_bar" onclick="toggleExpand(2)">
                    <h1 class="faq__list_title">{{__('language.faq4')}}</h1>
                    <svg id="svg2" viewBox="0 0 26 26" class="svg-icon thin-x svg_closed" focusable="true">
                        <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z"></path>
                    </svg>
                </button>
                <div id="desc2" class="closed faq__desc">
                    {{__('language.faq5')}}
                </div>
            </div>
            <div class="faq__list_item">
                <button class="main__list_bar" onclick="toggleExpand(3)">
                    <h1 class="faq__list_title">{{__('language.faq6')}}</h1>
                    <svg id="svg3" viewBox="0 0 26 26" class="svg-icon thin-x svg_closed" focusable="true">
                        <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z"></path>
                    </svg>
                </button>
                <div id="desc3" class="closed faq__desc">
                    {{__('language.faq7')}}
                    <br />
                    <br />
                    {{__('language.faq8')}}
                </div>
            </div>
            <div class="faq__list_item">
                <button class="main__list_bar" onclick="toggleExpand(4)">
                    <h1 class="faq__list_title">{{__('language.faq9')}}</h1>
                    <svg id="svg4" viewBox="0 0 26 26" class="svg-icon thin-x svg_closed" focusable="true">
                        <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z"></path>
                    </svg>
                </button>
                <div id="desc4" class="closed faq__desc">
                    {{__('language.faq10')}}
                </div>
            </div>
            <div class="faq__list_item">
                <button class="main__list_bar" onclick="toggleExpand(5)">
                    <h1 class="faq__list_title">{{__('language.faq11')}}</h1>
                    <svg id="svg5" viewBox="0 0 26 26" class="svg-icon thin-x svg_closed" focusable="true">
                        <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z"></path>
                    </svg>
                </button>
                <div id="desc5" class="closed faq__desc">
                    {{__('language.faq12')}}
                </div>
            </div>
            <div class="faq__list_item">
                <button class="main__list_bar" onclick="toggleExpand(6)">
                    <h1 class="faq__list_title">{{__('language.faq13')}}</h1>
                    <svg id="svg6" viewBox="0 0 26 26" class="svg-icon thin-x svg_closed" focusable="true">
                        <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z"></path>
                    </svg>
                </button>
                <div id="desc6" class="closed faq__desc">
                    {{__('language.faq14')}}
                    <br />
                    <br />
                    {{__('language.faq15')}}
                </div>
            </div>
        </div>
        <h4 class="label__hero_entry">{{__('language.hero3')}}</h4>
        <form method="post" class="container__form" action=@if ( Config::get("app.locale") == 'en') "\register" @else "\in-hi\register" @endif>
            @csrf
            <span class="parent__label" onfocusin="inputfocused2()" onfocusout="inputfocusout2()">
                <input class="email_entry" type="email" name="email" placeholder="{{__('language.emailHero')}}" id="email_entry2" required="true">
                <label id="hero_label2" class="hero__label" for="email_entry2">{{__('language.emailHero')}}</label>
                <label id="warning_label2" class="warning_label"></label>
            </span>
            <button type="submit" class="button subscribe">{{__('language.getStarted')}}</button>
        </form>
    </div>
</div>