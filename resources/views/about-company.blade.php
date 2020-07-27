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
    <section class="container-fluid" id="about-us-section">
        <div class="row">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <h1 class="title-section">{{$data['title_'.$locale]}}</h1>
                </div>
                <div class="row head-info">
                    <div class="col-md-12 col-lg-6 col-xl-6 block-image">
                        <img src="{{asset($data->image)}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6 first-info-block">
                        <div class="row">
                            <div class="col-xl-12 info">
                                {!! $data['content_'.$locale] !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex middle-info">
                    <div class="col-xl-12 info">
                        <style>
                            h3{
                                text-align: center;
                            }
                            .blacked p, .blacked h3{
                                color: #000 !important;
                            }
                        </style>
                        <div class="blacked">
                            {!!$data['additional_content_'.$locale] !!}
                        </div>
                    </div>
                </div>
                <div class="d-flex middle-info">
                    <div class="col-xl-12 info">
                        <div class="row title justify-content-center">
                            @if($locale == 'ru')
                                <h3 class="blacked">Наши преимущества в разработке</h3>
                            @elseif($locale == 'ua')
                                <h3 class="blacked">Наші переваги в розробці</h3>
                            @elseif($locale == 'en')
                                <h3 class="blacked">Our advantages in development</h3>
                            @endif
                        </div>
                        <div class="slider-advantages">
                            @if(!empty($advantages))
                                @foreach($advantages as $advantage)
                                    <div>
                                        <div class="slider-item">
                                            <div class="d-flex justify-content-center pr">
                                                <img src="{{asset($advantage->icon)}}" class="slider-image" alt="">
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <h5>{{$advantage['title_'.$locale]}}%</h5>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span>{!! $advantage['description_'].$locale !!}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div id="slider-btn">
                            <button class="slick-prev slick-arrow" id="adv-prev">Previous</button>
                            <button class="slick-next slick-arrow" id="adv-next">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
