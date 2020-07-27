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
                            <h3 class="blacked">Наши преимущества в разработке</h3>
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
                                                <span>{{$advantage['description_'].$locale}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
{{--                            <div>--}}
{{--                                <div class="slider-item">--}}
{{--                                    <div class="d-flex justify-content-center pr">--}}
{{--                                        <img src="./img/drop.png" class="slider-image" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex justify-content-center">--}}
{{--                                        <h5>Предотвратите конденсацию влаги</h5>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex justify-content-center">--}}
{{--                                        <span>Термочехол Cold снижает потери энергии на поддержание отрицательной температуры хладопровода и предотвращает конденсацию влаги</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="slider-item">--}}
{{--                                    <div class="d-flex justify-content-center pr">--}}
{{--                                        <img src="./img/snowfleke.png" class="slider-image" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex justify-content-center">--}}
{{--                                        <h5>Предотвратите замерзание</h5>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex justify-content-center">--}}
{{--                                        <span>Термочехол Antifreeze предусматривает подогрев для предотвращения замерзания оборудования и трубопроводов</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="slider-item">--}}
{{--                                    <div class="d-flex justify-content-center pr">--}}
{{--                                        <img src="./img/sound.png" class="slider-image" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex justify-content-center">--}}
{{--                                        <h5>Уменьшите шум оборудования</h5>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex justify-content-center">--}}
{{--                                        <span>Термочехол Noise снижает уровень шума рабочей среды</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="slider-item">--}}
{{--                                    <div class="d-flex justify-content-center pr">--}}
{{--                                        <img src="./img/sun.png" class="slider-image" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex justify-content-center">--}}
{{--                                        <h5>Сократите теплопотери до 75%</h5>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex justify-content-center">--}}
{{--                                        <span>Термочехол Нeat предотвращает теплопотери до 75% и экономит Ваш</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
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
