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
    @isset($meta_keywds)
        <meta name="keywords" content="{{ $meta_keywds }}">
    @endisset
    @isset($title)
        <title>
            {{ $title }}
        </title>
    @endisset

    @include('partials.head')
</head>
<body>
    @include('partials.navigation')

    @yield('content')

    @if(Request::path() == '/about-company')
        @include('partials.footer_2')
    @else
        @include('partials.footer')
    @endif
    @include('partials.scripts')
</body>
</html>
