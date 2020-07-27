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
    <div class="slider-section">
        @if(!empty($slides))
            @foreach($slides as $slide)
                <div class="item">
                    <div class="bg-image">
                        <img src="{{asset($slide->image)}}">
                    </div>
                <div class="content">
                    <div class="d-flex">
                        <div class="d-flex justify-content-center">
                            <span>
                                {{ $slide['title_'.$locale] }}
                            </span>
                        </div>
                        <div class="row">
                            @if($slide->link)
                                @if($locale == 'ru')
                                    <a href="{{ $slide->link }}" class="btn-learn-more">
                                        Подробнее
                                    </a>
                                @elseif($locale == 'ua')
                                    <a href="{{ $slide->link }}" class="btn-learn-more">
                                        Детальніше
                                    </a>
                                @elseif($locale == 'en')
                                    <a href="{{ $slide->link }}" class="btn-learn-more">
                                        Learn more
                                    </a>
                                @endif

                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>

    <section class="container-fluid" id="index-our-target">
        <div class="row">
            <div class="container">
                <div class="row d-flex justify-content-center flex-column">
                    @if($locale == 'ru')
                        <h3 class="our-target-title">Наша цель</h3>
                    @elseif($locale == 'ua')
                        <h3 class="our-target-title">Наша мета</h3>
                    @elseif($locale == 'en')
                        <h3 class="our-target-title">Our target</h3>
                    @endif
                    <div class="col our-target-text">
                        {!! $data['content_'.$locale] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-gallery-index">
        <div class="d-flex justify-content-center">
            @if($locale == 'ru')
                <h3 class="title-gallery">Галерея</h3>
            @elseif($locale == 'ua')
                <h3 class="title-gallery">Галерея</h3>
            @elseif($locale == 'en')
                <h3 class="title-gallery">Gallery</h3>
            @endif
        </div>
        <div class="">
            <style>
                .image-block{
                    flex: 1;
                    padding: 0;
                }
            </style>
            <div id="index-lightgallery">
                @if(!empty($images))
                    @foreach($images as $image)
                        <a href="{{asset($image->image)}}" class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 image-block">
                            <img src="{{asset($image->image)}}" alt="{{$image['title_'.$locale]}}" />
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
