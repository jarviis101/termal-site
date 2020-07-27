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
    <section class="container-fluid" id="services-head-section">
        <div class="row">
            <div class="container">
                <div class="row justify-content-center">
                    <h1 class="title-services-section">{{$data['title_'.$locale]}}</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col additional-text">
                        {!! $data['content_'.$locale] !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container list-of-services">
                <div class="row">
                    <style>
                        .services-item{
                            display: flex;
                            flex-direction: row;
                        }
                        li{
                            background: none;
                            border: none;
                            font-family: 'Cambria';
                            font-weight: 400;
                            font-size: 1rem;
                        }
                        .current_odd, .current
                        {
                            display: flex;
                            flex-direction: row;
                        }
                        .current_odd{
                            flex-direction: row-reverse;
                        }
                    </style>
                    @if(!empty($services))
                        @foreach($services as $service)
                            @if($loop->index % 2 == 0)
                                <div class="col-12 services-item img-l-side">
                                    <div class="row current">
                                        <div class="col-md-12 col-lg-6 col-xl-6">
                                            <div class="img-block">
                                                <img src="{{asset($service->image)}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 col-xl-6">
                                            <div class="row justify-content-center info-block">
                                                <h3 class="col-12">
                                                    {{$service['title_'.$locale]}}
                                                </h3>
                                                <div class="col-12">
                                                    {!! $service['content_'.$locale] !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-12 services-item img-r-side">
                                    <div class="row current_odd">
                                        <div class="col-md-12 col-lg-6 col-xl-6">
                                            <div class="img-block">
                                                <img src="{{asset($service->image)}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 col-xl-6">
                                            <div class="row justify-content-center info-block">
                                                <h3 class="col-12">
                                                    {{$service['title_'.$locale]}}
                                                </h3>
                                                <div class="col-12">
                                                    {!! $service['content_'.$locale] !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
