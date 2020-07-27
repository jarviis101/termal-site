@php
    $locale = app()->getLocale();
@endphp
@extends('layouts.layout', [
    'title' => $data['title_'.$locale],
    'meta_title' => $data->extras['meta_title_'.$locale],
    'meta_description' => $data->extras['meta_description_'.$locale],
    'meta_keywords' => $data->extras['meta_keywords'],
])
@section('content')
    <section class="container-fluid" id="prod-catalog-section">
        <div class="row">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <h1 class="title-section">{{$data['title_'.$locale]}}</h1>
                </div>
                <div class="row">
                    <div class="col-12 title-text">
                        {!! $data['content_'.$locale] !!}
                    </div>
                </div>
                <div class="row list-of-services">
                    <style>
                        .services-item a{
                            height: 350px;
                        }
                    </style>
                    @foreach($categories as $category)
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 service-item">
                            <a href="{{route('product_catalog', app()->getLocale())}}">
                                <div class="img-block">
                                    <img src="{{asset($category->image)}}" alt="">
                                </div>
                                <span>{{$category->name}}</span>
                            </a>
                        </div>
                    @endforeach

{{--                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 service-item">--}}
{{--                        <a href="#">--}}
{{--                            <div class="img-block">--}}
{{--                                <img src="./img/service2.png" alt="">--}}
{{--                            </div>--}}
{{--                            <span>Теплоизоляционные материалы</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-6 service-item">--}}
{{--                        <a href="#">--}}
{{--                            <div class="img-block">--}}
{{--                                <img src="./img/service3.png" alt="">--}}
{{--                            </div>--}}
{{--                            <span>Воздуховоды систем вентиляции и аспирации</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-6 service-item">--}}
{{--                        <a href="#">--}}
{{--                            <div class="img-block">--}}
{{--                                <img src="./img/service4.png" alt="">--}}
{{--                            </div>--}}
{{--                            <span>Огнеупорные материалы</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-6 service-item">--}}
{{--                        <a href="#">--}}
{{--                            <div class="img-block">--}}
{{--                                <img src="./img/service5.png" alt="">--}}
{{--                            </div>--}}
{{--                            <span>Крепежные материалы</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
