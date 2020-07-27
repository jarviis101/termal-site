<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @isset($meta_title)
        <meta name="title" content="{{ $meta_title }}">
    @endisset
    @isset($meta_description)
        <meta name="description" content="{{ $meta_description }}">
    @endisset
    @isset($meta_keywords)
        <meta name="keywords" content="{{ $meta_keywords }}">
    @endisset
    @isset($title)
        <title>
            {{ $title }}
        </title>
    @endisset

    @include('partials.head')
</head>
<body>
    <div class="loader"></div>
    @include('partials.navigation')

    @yield('content')

    @if(route('about', app()->getLocale()))
        @include('partials.footer_2')
    @else
        @include('partials.footer')
    @endif
    @include('partials.scripts')
</body>
</html>
