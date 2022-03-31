@include('base_legal')
@include('header_legal')
<div class="main_container">
    <h1>{{__('language.legalNoticeT')}}</h1>
    <br />
    <p>
    {!!__('language.legalNotice')!!}
    </p>
</div>
@include('footer_legal')