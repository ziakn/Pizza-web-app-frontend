@extends('layouts.app')

@section('content')
<section class="food__menu__grid__area section-padding--lg">
            <div class="container">
                <div class="row mt--30">
                    <div class="col-lg-12">
                        <div class="fd__tab__content tab-content" id="nav-tabContent">
                            <!-- Start Single Content -->
                            <div class="food__list__tab__content tab-pane fade show active" id="nav-all" role="tabpanel">
                                <!-- Start Single Food -->
                                @foreach ($pizzaLisa as $item)
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="/">
                                            @if(! $item->image->isEmpty()) 
                                        <img src="{{$item->image->first()->src}}" alt="list food images">
                                        @endif
                                        </a>
                                    </div>
                                    <div class="food__list__inner d-flex align-items-center justify-content-between">
                                        <div class="food__list__details">
                                            <h2><a href="menu-details.html">{{$item->title}}</a></h2>
                                            <p> {{$item->description}}</p>
                                            <div class="list__btn">
                                                <a class="food__btn grey--btn theme--hover" href="{{ URL('/app/home/'.$item->id )}}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                           
                                                <span>{{$item->price}}</span>
                                                {{$item->priceType}}
                                            </div>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
@endsection
