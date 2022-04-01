@include('base')
@include('header')
@include('hero')
@include('tv')
@include('mobile')
@include('everywhere')
@include('children')
@include('faq')
@if (Cookie::get('message')!=null) 
<script>alert('{{Cookie::get("message")}}')</script>
<?php
Cookie::queue(Cookie::forget('message'));
?>
@endif
@include('footer')
