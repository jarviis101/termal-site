@php
    $pages = \App\Http\Controllers\PageController::get_all_pages();
@endphp
<nav class="navbar navbar-expand-lg navbar-light" id="nav-md">
    <a class="navbar-brand" href="{{ route('index', app()->getLocale()) }}">
        <img src="{{asset('/img/LOGO.png')}}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="contact">
            <div class="row">
                <div>
                    <a class="col-xl-6" href="mailto:{{ Setting::get('contact_email') }}">{{ Setting::get('contact_email') }}</a>
                </div>
                <div>
                    <a class="col-xl-6" href="tel:{{ Setting::get('contact_number') }}">{{ Setting::get('contact_number') }}</a>
                </div>
            </div>
        </div>
        <ul class="navbar-nav">
{{--            @foreach($pages as $page)--}}
{{--                @if($page->slug != '/')--}}
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link" href="#">{{$page->title}}</a>--}}
{{--                </li>--}}
{{--                @endif--}}
{{--            @endforeach--}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about', app()->getLocale()) }}">О компании</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('services', app()->getLocale()) }}">Каталог услуг</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('product_list', app()->getLocale()) }}">Каталог продукции</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('projects', app()->getLocale()) }}">Наши проекты</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('info', app()->getLocale()) }}">Инфо</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contacts', app()->getLocale()) }}">Наши контакты</a>
            </li>
            <style>
                span.flag-icon-en{
                    display: none !important;
                }
            </style>
            @foreach(config('app.available_locales') as $locale)
                <li @if(app()->getLocale() == $locale) class="nav-item" @endif>
                    <a class="nav-link" href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}">
                        @if($locale == 'en')
                            <span class="flag-icon flag-icon-us"></span>
                        @endif
                        <span class="flag-icon flag-icon-{{$locale}}"></span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <li>
        <a href="{{ route('index', app()->getLocale()) }}">Главная</a>
    </li>
    <li>
        <a href="{{ route('about', app()->getLocale()) }}">О компании</a>
    </li>
    <li>
        <a href="{{ route('services', app()->getLocale()) }}">Каталог услуг</a>
    </li>
    <li>
        <a href="{{ route('product_list', app()->getLocale()) }}">Каталог продукции</a>
    </li>
    <li>
        <a href="{{ route('projects', app()->getLocale()) }}">Наши проекты</a>
    </li>
    <li>
        <a href="{{ route('info', app()->getLocale()) }}">Инфо</a>
    </li>
    <li>
        <a href="{{ route('contacts', app()->getLocale()) }}">Наши контакты</a>
    </li>
    <li>
        <a href="mailto:{{ Setting::get('contact_email') }}">{{ Setting::get('contact_email') }}</a>
    </li>
    <li>
        <a href="tel:{{ Setting::get('contact_number') }}">{{ Setting::get('contact_number') }}</a>
    </li>
</div>
<span onclick="openNav()" class="btn-toggle-menu">
        <i class="fas fa-bars"></i>
    </span>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
