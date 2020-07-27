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
                                {{ $slide->title }}
                            </span>
                        </div>
                        <div class="row">
                            <a href="{{ $slide->link }}" class="btn-learn-more">Learn more</a>
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
                    <h3 class="our-target-title">Наша цель</h3>
                    <div class="col our-target-text">
                        {!! $data['content_'.$locale] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-gallery-index">
        <div class="d-flex justify-content-center">
            <h3 class="title-gallery">Gallery</h3>
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
                        <a href="{{asset($slide->image)}}" class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 image-block">
                            <img src="{{asset($slide->image)}}" />
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
