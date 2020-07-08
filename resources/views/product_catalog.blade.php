@extends('layouts.layout', [
    'title' => $data->title,
    'meta_title' => $data->extras['meta_title'],
    'meta_description' => $data->extras['meta_description'],
    'meta_keywords' => $data->extras['meta_keywords'],
])
@section('content')
    <section id="catalog-section">
        <div class="d-flex justify-content-center">
            <h1 class="title-info-section">{{$data->title}}</h1>
        </div>
        <div class="d-flex current-row">
            <div class="d-flex current-row-2">
                <div class="d-flex center">
                    <style>
                        .title-menu
                        {
                            padding-left: 20px !important;

                        }
                    </style>
                    <h3 class="title-menu">{{$data->title}}</h3>
                </div>
                <div class="nav flex-column nav-pills col-12 nav-menu-goriz" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @if(!empty($categories))
                        @foreach($categories as $category)
                            @if($loop->index == 0)
                                <a class="nav-link active" data-toggle="pill" href="#{{$category->slug}}" role="tab" data-toggle="tab" aria-selected="true">{{$category->name}}</a>
                            @else
                                <a class="nav-link" data-toggle="pill" href="#{{$category->slug}}" role="tab" data-toggle="tab" aria-selected="true">{{$category->name}}</a>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="tab-content col-xl-10" id="v-pills-tabContent">
                @if(!empty($categories))
                    @foreach($categories as $category)
                        @if($loop->index == 0)
                            <div class="tab-pane fade show active" id="{{$category->slug}}" role="tabpanel">
                                <div class="d-flex justify-content-center title-tab">
                                    <h3 class="title-in-tab">
                                        {{$category->name}}
                                    </h3>
                                    <span>Съемная теплоизоляция Термочехол - это производство термочехлов от компании ЛайфБуд.</span>
                                    <a href="/">https://www.termochehol.com/</a>
                                </div>
                                <div class="first-container-products">
                                    <div class="first-row-products">
                                        @if(!empty($products))
                                            @foreach($products as $product)
                                                @if($product->category_id == $category->id)
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                                    <div class="product-item d-flex">
                                                        <div class="col-xl-6">
                                                            <div class="img-block">
                                                                <img src="{{asset($product->image)}}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="row center-sm">
                                                                <span class="name">{{$product->name}}</span>
                                                            </div>
                                                            <div class="row center-sm">
                                                                <span class="price">{{$product->price}} грн.</span>
                                                            </div>
                                                            <div class="row center-sm">
                                                                <a href="" class="additional-info">Подробнее</a>
                                                            </div>
                                                            <div class="row justify-content-end center-sm">
                                                                <a href="/" class="btn-order">Заказать</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                        <!-- <nav class="d-flex justify-content-center">
                            <ul class="pagination">
                              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav> -->

                        <!-- <div class="products-btn-row">
                            <button class="slick-prev slick-arrow" id="products-prev">Previous</button>
                            <button class="slick-next slick-arrow" id="products-next">Next</button>
                        </div> -->
                    </div>
                </div>
                        @else
                            <div class="tab-pane fade" id="{{$category->slug}}" role="tabpanel">
                                <div class="d-flex justify-content-center title-tab">
                                    <h3 class="title-in-tab">
                                        {{$category->name}}
                                    </h3>
                                    <span>Съемная теплоизоляция Термочехол - это производство термочехлов от компании ЛайфБуд.</span>
                                    <a href="/">https://www.termochehol.com/</a>
                                </div>
                                <div class="first-container-products">
                                    <div class="first-row-products">
                                        @if(!empty($products))
                                            @foreach($products as $product)
                                                @if($product->category_id == $category->id)
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                                        <div class="product-item d-flex">
                                                            <div class="col-xl-6">
                                                                <div class="img-block">
                                                                    <img src="{{asset($product->image)}}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="row center-sm">
                                                                    <span class="name">{{$product->name}}</span>
                                                                </div>
                                                                <div class="row center-sm">
                                                                    <span class="price">{{$product->price}} грн.</span>
                                                                </div>
                                                                <div class="row center-sm">
                                                                    <a href="" class="additional-info">Подробнее</a>
                                                                </div>
                                                                <div class="row justify-content-end center-sm">
                                                                    <a href="/" class="btn-order">Заказать</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                    <!-- <nav class="d-flex justify-content-center">
                                        <ul class="pagination">
                                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav> -->

                                    <!-- <div class="products-btn-row">
                                        <button class="slick-prev slick-arrow" id="products-prev">Previous</button>
                                        <button class="slick-next slick-arrow" id="products-next">Next</button>
                                    </div> -->
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
