@php
    $pages = \App\Http\Controllers\PageController::get_all_pages();
@endphp
<nav class="navbar navbar-expand-lg navbar-light" id="nav-md">
    <a class="navbar-brand" href="/">
        <img src="./img/LOGO.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="contact">
            <div class="row">
                <div>
                    <a class="col-xl-6" href="mailto:office@____________.com.ua">office@____________.com.ua</a>
                </div>
                <div>
                    <a class="col-xl-6" href="tel:+38 067 572 50 73">+38 067 572 50 73</a>
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
                <a class="nav-link" href="/about">О компании</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/services">Каталог услуг</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#">Каталог продукции</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#">Наши проекты</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#">Инфо</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contacts">Наши контакты</a>
            </li>
        </ul>
    </div>
</nav>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <li>
        <a href="/">Главная</a>
    </li>
    <li>
        <a href="/about">О компании</a>
    </li>
    <li>
        <a href="/services">Каталог услуг</a>
    </li>
    <li>
        <a href="/#">Каталог продукции</a>
    </li>
    <li>
        <a href="/#">Наши проекты</a>
    </li>
    <li>
        <a href="/#">Инфо</a>
    </li>
    <li>
        <a href="/contacts">Наши контакты</a>
    </li>
    <li>
        <a href="mail:">office@mail.com.ua</a>
    </li>
    <li>
        <a href="tel:">+38 067 572 50 73</a>
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
