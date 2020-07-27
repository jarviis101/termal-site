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
    <section id="info-section">
        <div class="d-flex justify-content-center">
            <h1 class="title-info-section">{{$data['title_'.$locale]}}</h1>
        </div>
        <div class="d-flex current-row">
            <div class="d-flex current-row-2">
                <div class="d-flex center">
                    <h3 class="title-menu">{{$data['title_'.$locale]}}</h3>
                </div>
                <div class="nav flex-column nav-pills col-md-12 col-lg-2 col-xl-2 nav-menu-goriz" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @if($locale == 'ru')
                        <a class="nav-link active" data-toggle="pill" href="#partners" role="tab" aria-selected="true">Партнеры</a>
                        <a class="nav-link"  data-toggle="pill" href="#news" role="tab" aria-selected="false">Новости</a>
                        <a class="nav-link" data-toggle="pill" href="#certificates" role="tab" aria-selected="false">Сертфикаты и лицензии</a>
                        <a class="nav-link" data-toggle="pill" href="#videos" role="tab" aria-selected="false">Видео</a>
                        <a class="nav-link" data-toggle="pill" href="#vacancy" role="tab" aria-selected="false">Вакансии</a>
                    @elseif($locale == 'ua')
                        <a class="nav-link active" data-toggle="pill" href="#partners" role="tab" aria-selected="true">Партнери</a>
                        <a class="nav-link"  data-toggle="pill" href="#news" role="tab" aria-selected="false">Новини</a>
                        <a class="nav-link" data-toggle="pill" href="#certificates" role="tab" aria-selected="false">Сертифікати і ліцензії</a>
                        <a class="nav-link" data-toggle="pill" href="#videos" role="tab" aria-selected="false">Відео</a>
                        <a class="nav-link" data-toggle="pill" href="#vacancy" role="tab" aria-selected="false">Вакансії</a>
                    @elseif($locale == 'en')
                        <a class="nav-link active" data-toggle="pill" href="#partners" role="tab" aria-selected="true">Partners</a>
                        <a class="nav-link"  data-toggle="pill" href="#news" role="tab" aria-selected="false">News</a>
                        <a class="nav-link" data-toggle="pill" href="#certificates" role="tab" aria-selected="false">Certificates and licenses</a>
                        <a class="nav-link" data-toggle="pill" href="#videos" role="tab" aria-selected="false">Videos</a>
                        <a class="nav-link" data-toggle="pill" href="#vacancy" role="tab" aria-selected="false">Vacancies</a>
                    @endif
                </div>
            </div>
            <div class="tab-content col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="partners" role="tabpanel">
                    <div class="d-flex justify-content-center">
                        @if($locale == 'ru')
                            <h3 class="title-in-tab">
                                Партнеры
                            </h3>
                        @elseif($locale == 'ua')
                            <h3 class="title-in-tab">
                                Партнери
                            </h3>
                        @elseif($locale == 'en')
                            <h3 class="title-in-tab">
                                Partners
                            </h3>
                        @endif
                    </div>
                    <div class="first-container-partners">
                        <div class="first-row-partners">
                            @if(!empty($partners))
                                @foreach($partners as $partner)
                                    <div>
                                        <div class="logo-block">
                                            <img src="{{asset($partner->logo)}}" alt="{{$partner->name}}">
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="first-btn-row">
                            <button class="slick-prev slick-arrow" id="first-prev">Previous</button>
                            <button class="slick-next slick-arrow" id="first-next">Next</button>
                        </div>
                    </div>
{{--                    <div class="second-container-partners">--}}
{{--                        <div class="second-row-partners">--}}
{{--                            <div>--}}
{{--                                <div class="logo-block">--}}
{{--                                    <img src="./img/LIGO.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="logo-block">--}}
{{--                                    <img src="./img/LIGO.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="logo-block">--}}
{{--                                    <img src="./img/LIGO.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="logo-block">--}}
{{--                                    <img src="./img/LIGO.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="second-btn-row">--}}
{{--                            <button class="slick-prev slick-arrow" id="second-prev" aria-label="Previous" type="button">Previous</button>--}}
{{--                            <button class="slick-next slick-arrow" id="second-next" aria-label="Next" type="button">Next</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="tab-pane fade" id="news" role="tabpanel">
                    <div class="d-flex justify-content-center">
                        @if($locale == 'ru')
                            <h3 class="title-in-tab">
                                Новости
                            </h3>
                        @elseif($locale == 'ua')
                            <h3 class="title-in-tab">
                                Новини
                            </h3>
                        @elseif($locale == 'en')
                            <h3 class="title-in-tab">
                                News
                            </h3>
                        @endif
                    </div>
                    <div class="news-container">
                        @if(!empty($news))
                            @foreach($news as $item)
                                <div class="news-item col-xl-8">
                                <a href="/news/{{$item->slug}}" class="img-block">
                                    <img src="{{asset($item->image)}}" alt="">
                                </a>
                                <h4 class="title-news">
                                    {{$item['name_'.$locale]}}
                                </h4>
                                <div class="text-news">
                                    {!! $item['content_'].$locale !!}
                                </div>
                                    @if($locale == 'ru')
                                        <a class="nav-link to-news-btn" href="/news/{{$item->slug}}">Подробнее</a>
                                    @elseif($locale == 'ua')
                                        <a class="nav-link to-news-btn" href="/news/{{$item->slug}}">Детальніше</a>
                                    @elseif($locale == 'en')
                                        <a class="nav-link to-news-btn" href="/news/{{$item->slug}}">Learn more</a>
                                    @endif
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade" id="certificates" role="tabpanel">
                    <div class="d-flex justify-content-center">
                        @if($locale == 'ru')
                            <h3 class="title-in-tab">
                                Сертификаты и лицензии
                            </h3>
                        @elseif($locale == 'ua')
                            <h3 class="title-in-tab">
                                Сертифікати і ліцензії
                            </h3>
                        @elseif($locale == 'en')
                            <h3 class="title-in-tab">
                                Certificates and licenses
                            </h3>
                        @endif
                    </div>
                    <div class="first-container-partners">
                        <div class="first-row-cert">
                            @if(!empty($certificates))
                                @foreach($certificates as $certificate)
                                    <div>
                                        <div class="logo-block">
                                            <img src="{{asset($certificate->image)}}" alt="{{$certificate['title_'.$locale]}}">
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="first-btn-row">
                            <button class="slick-prev slick-arrow" id="first-prev-cert">Previous</button>
                            <button class="slick-next slick-arrow" id="first-next-cert">Next</button>
                        </div>
                    </div>
{{--                    <div class="second-container-partners">--}}
{{--                        <div class="second-row-cert">--}}
{{--                            <div>--}}
{{--                                <div class="logo-block">--}}
{{--                                    <img src="./img/сертификат.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="logo-block">--}}
{{--                                    <img src="./img/сертификат2.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="logo-block">--}}
{{--                                    <img src="./img/сертификат.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="logo-block">--}}
{{--                                    <img src="./img/сертификат2.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="second-btn-row">--}}
{{--                            <button class="slick-prev slick-arrow" id="second-prev-cert" aria-label="Previous" type="button">Previous</button>--}}
{{--                            <button class="slick-next slick-arrow" id="second-next-cert" aria-label="Next" type="button">Next</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
                <div class="tab-pane fade" id="videos" role="tabpanel">
                    <div class="d-flex justify-content-center">
                        @if($locale == 'ru')
                            <h3 class="title-in-tab">
                                Видео
                            </h3>
                        @elseif($locale == 'ua')
                            <h3 class="title-in-tab">
                                Відео
                            </h3>
                        @elseif($locale == 'en')
                            <h3 class="title-in-tab">
                                Videos
                            </h3>
                        @endif
                    </div>
                    <div class="video-container">
                        <style>
                            iframe{
                                height: 615px !important;
                                width: 100% !important;
                            }
                            p{
                                color: #000000;
                                font-family: "Cambria";
                                font-size: 1.3rem;
                            }
                        </style>
                        @if(!empty($videos))
                            @foreach($videos as $video)
                                <div class="video-item col-xl-8">
                                    {!! Embed::make($video->link)->parseUrl()->getIframe() !!}
                                    <h4 class="video-title">
                                        {{$video['title_'.$locale]}}
                                    </h4>
                                    <div class="video-text">
                                        {!! $video['description_'.$locale] !!}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade" id="vacancy" role="tabpanel">
                    <div class="d-flex justify-content-center">
                        @if($locale == 'ru')
                            <h3 class="title-in-tab">
                                Вакансии
                            </h3>
                        @elseif($locale == 'ua')
                            <h3 class="title-in-tab">
                                Вакансії
                            </h3>
                        @elseif($locale == 'en')
                            <h3 class="title-in-tab">
                                Vacancies
                            </h3>
                        @endif
                    </div>
                    <div class="vacancy-container">
                        @if(!empty($vacancies))
                            @foreach($vacancies as $vacancy)
                                <div class="vacancy-item col-xl-8">
                                    <div class="img-block">
                                        <img src="{{asset($vacancy->image)}}" alt="">
                                    </div>
                                    <h4 class="vacancy-title">
                                        {{$vacancy['name_'.$locale]}}
                                    </h4>
                                    <div class="vacancy-text">
                                        {{$vacancy['description_'.$locale]}}
                                    </div>
                                    {{--form here--}}
                                    @if($locale == 'ru')
                                        <a class="nav-link to-news-btn" href="/">Отправить резюме</a>
                                    @elseif($locale == 'ua')
                                        <a class="nav-link to-news-btn" href="/">Відправити резюме</a>
                                    @elseif($locale == 'en')
                                        <a class="nav-link to-news-btn" href="/">Send a resume</a>
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
