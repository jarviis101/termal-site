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
    <style>
        #projects-section .slider-section-proj .item .img-block{
            width: 100%;
        }
    </style>
    <section id="projects-section">
        <div class="d-flex flex-column">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <h1 class="title-section">{{$data['title_'.$locale]}}</h1>
                </div>
                <div class="row">
                    <div class="col-12 title-text">
                        {!! $data['content_'.$locale] !!}
                    </div>
                </div>
            </div>
            <div class="tab-section">
                <div class="slider-section-proj">
                    <ul class="row-projects" role="tablist" id="v-pills-tab">
                        @if(!empty($types))
                            @foreach($types as $type)
                                @if($loop->index == 0)
                                    <a class="active" data-toggle="pill" href="#{{$type->slug}}" role="tab" aria-selected="true">
                                        <div class="item">
                                            <div class="img-block">
                                                <img src="{{asset($type->image)}}" alt="">
                                            </div>
                                            <span>{{$type['title_'.$locale]}}</span>
                                        </div>
                                    </a>
                                @else
                                    <a class="active" data-toggle="pill" href="#{{$type->slug}}" role="tab" aria-selected="true">
                                        <div class="item">
                                            <div class="img-block">
                                                <img src="{{asset($type->image)}}" alt="">
                                            </div>
                                            <span>{{$type['title_'.$locale]}}</span>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                    <div class="projects-btn-row">
                        <button class="slick-prev slick-arrow" id="first-prev">Previous</button>
                        <button class="slick-next slick-arrow" id="first-next">Next</button>
                    </div>
                </div>
                <div class="proj-tab-section">
                    <div class="container">
                        <div class="tab-content" id="v-pills-tabContent">
                            @if(!empty($types))
                                @foreach($types as $type)
                                    @if($loop->index == 0)
                                        <div id="{{$type->slug}}" class="tab-pane active" role="tabpanel">
                                            <div class="d-flex justify-content-center">
                                                <h4 class="title-tabs">{{$type['title_'.$locale]}}</h4>
                                            </div>
                                            <div class="row">
                                                @if(!empty($projects))
                                                    @foreach($projects as $project)
                                                        @if($project->type_id == $type->id)
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                                <div class="item-project">
                                                                    <div class="d-flex justify-content-center">
                                                                        <div class="img-project-block">
                                                                            <img src="{{asset($project->image)}}" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <h4 class="d-flex">{{$project['name_'.$locale]}}</h4>
                                                                    <div class="d-flex">
                                                                        <p>
                                                                            {!! $project['description_'.$locale] !!}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    @else
                                        <div id="{{$type->slug}}" class="tab-pane" role="tabpanel">
                                            <div class="d-flex justify-content-center">
                                                <h4 class="title-tabs">{{$type['title_'.$locale]}}</h4>
                                            </div>
                                            <div class="row">
                                                @if(!empty($projects))
                                                    @foreach($projects as $project)
                                                        @if($project->type_id == $type->id)
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                                                <div class="item-project">
                                                                    <div class="d-flex justify-content-center">
                                                                        <div class="img-project-block">
                                                                            <img src="{{asset($project->image)}}" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <h4 class="d-flex">{{$project['name_'.$locale]}}</h4>
                                                                    <div class="d-flex">
                                                                        <p>
                                                                            {!! $project['description_'.$locale] !!}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
