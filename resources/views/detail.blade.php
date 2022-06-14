@extends('layouts.base')

@section('titleContent')
    Dc - {{$comic['series']}}
@endsection

@section('mainContent')
    <section id="first-sec-single">
        <div class="jumbotron"></div>
        <div class="blu-line"></div>
        <div class="main-box">
            <div class="comic-box">
                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                <span>Comic book</span>
                <span>View Gallery</span>
            </div>
        </div>
    </section>
    <section id="second-sec-single">
        <div class="main-box"> 
            <div class="row">
                <div class="col-8">
                    <div>
                        <h1>{{$comic['title']}}</h1>
                        <div class="row">
                            <div class="right">
                                <p><span>U.S. Price: </span>{{$comic['price']}}</p>
                                <span>AVAILABLE</span>
                            </div>
                            <div class="left">
                                <p>Check Availability <i class="fa-solid fa-sort-down"></i></p>
                            </div>
                        </div>
                        <p>{{$comic['description']}}</p>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <img src="../images/publ.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="third-sec-single">
        <div class="main-box">
            <div class="row">
                <div class="col-6">
                    <div class="ps-0">
                        <h2 class="bor-bot-grey">Talent</h2>
                        <div class="row bor-bot-grey">
                            <div class="col-4">
                                <p class="blue-text">Art by:</p>
                            </div>
                            <div class="col-8">
                                <p class="l-blue-text">
                                    @foreach ($comic['artists'] as $artist)
                                        {{$artist}},
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <div class="row bor-bot-grey">
                            <div class="col-4">
                                <p class="blue-text">Written by:</p>
                            </div>
                            <div class="col-8">
                                <p class="l-blue-text">
                                    @foreach ($comic['writers'] as $artist)
                                        {{$artist}},
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="pe-0">
                        <h2 class="bor-bot-grey">Specs</h2>
                        <div class="row bor-bot-grey">
                            <div class="col-4">
                                <p class="blue-text">Series:</p>
                            </div>
                            <div class="col-8">
                                <p class="l-blue-text">
                                    {{$comic['series']}}
                                </p>
                            </div>
                        </div>
                        <div class="row bor-bot-grey">
                            <div class="col-4">
                                <p class="blue-text">U.s. Price:</p>
                            </div>
                            <div class="col-8">
                                <p class="l-blue-text">
                                    {{$comic['price']}}
                                </p>
                            </div>
                        </div>
                        <div class="row bor-bot-grey">
                            <div class="col-4">
                                <p class="blue-text">On Sale Date:</p>
                            </div>
                            <div class="col-8">
                                <p class="l-blue-text">
                                    {{$comic['sale_date']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="fourth-sec-single">
        <div class="main-box row">
            <div class="col-3 row">
                <a href="/">Digital Comics</a>
                <img src="../images/buy-comics-digital-comics.png" alt="Digital Comics">
            </div>
            <div class="col-3 row">
                <a href="/">Shop DC</a>
                <img src="../images/buy-comics-subscriptions.png" alt="Subscription">
            </div>
            <div class="col-3 row">
                <a href="/">Comic Shop Locator</a>
                <img src="../images/buy-comics-shop-locator.png" alt="Comic Shop Locator">
            </div>
            <div class="col-3 row">
                <a href="/">Subscription</a>
                <img src="../images/buy-comics-merchandise.png" alt="Dc Merchandise">
            </div>
        </div>
    </section>
@endsection