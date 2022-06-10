@extends('layouts.base')

@section('titleContent')
    Dc - Comics
@endsection

@section('mainContent')
    <div class="jumbotron"></div>
    <section id="first-section">
        <div class="container">
            <div class="button title">
                <h3>Current series</h3>
            </div>
    
            {{-- @dump($comics) --}}
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="prod-card">
                        <div class="card-image">
                            <a href=""><img src="{{$comic['thumb']}}" alt="{{$comic['series']}}"></a>
                        </div>
                        <p>{{$comic['series']}}</p>
                    </div>
                </div> 
            @endforeach
    
            <a href="#" class="button btn">Load more</a>
        </div>
    </section>
    <section id="second-section">
        <div class="container">
            <nav>
                <ul class="flex-gap-1">
                    <li>
                        <img src="../images/buy-comics-digital-comics.png" alt="Digital Comics">
                        <a href="/">Digital Comics</a>
                    </li>
                    <li>
                        <img src="../images/buy-comics-merchandise.png" alt="Dc Merchandise">
                        <a href="/">Dc Merchandise</a>
                    </li>
                    <li>
                        <img src="../images/buy-comics-subscriptions.png" alt="Subscription">
                        <a href="/">Subscription</a>
                    </li>
                    <li>
                        <img src="../images/buy-comics-shop-locator.png" alt="Comic Shop Locator">
                        <a href="/">Comic Shop Locator</a>
                    </li>
                    <li>
                        <img src="../images/buy-dc-power-visa.svg" alt="Dc Power Visa">
                        <a href="/">Dc Power Visa</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <section>

    </section>
@endsection