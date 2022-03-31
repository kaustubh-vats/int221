<div class="bg__netflix">
    <img class="bg__netflix_img" src="{{__('language.bgImg')}}">
</div>
<div class="shadow"></div>
<div class="container">
    <h1 class="container__title">{{__('language.hero1')}}</h1>
    <h3>{{__('language.hero2')}}</h3>
    <h4 class="label__hero_entry">{{__('language.hero3')}}</h4>
    <form method="post" class="container__form" action=@if ( Config::get("app.locale") == 'en') "\register" @else "\in-hi\register" @endif>
        @csrf
        <span class="parent__label" onfocusin="inputfocused()" onfocusout="inputfocusout()">
            <input type="email" name="email" placeholder="{{__('language.emailHero')}}" id="email_entry" class="email_entry" required="true">
            <label id="hero_label" class="hero__label" for="email_entry">{{__('language.emailHero')}}</label>
            <label id="warning_label" class="warning_label"></label>
        </span>
        <button type="submit" class="button subscribe">{{__('language.getStarted')}}</button>
    </form>
</div>