@extends('layouts.main');
@section('page-title')
   Homepage 
@endsection
@section("page-content")
<div class="my-bg">
    <section class="container">
        <div class="comics">
            <button class="btn-series">
                <h2>CURRENT SERIES</h2>
            </button>

            @foreach ($comics as $comic)
            <div class="comic" >
                <img src="{{$comic['thumb']}}" alt="">
                <h5>{{$comic['series']}}</h5>
            </div>
            @endforeach
                
        </div>
        <div class="d-flex">
            <button class="btn-load">
                LOAD MORE
            </button>
        </div>
    </section>
</div>

<section class="ads-section">
   <div class="container">
   <div>
      <img src="{{Vite::asset("resources/img/buy-comics-digital-comics.png")}}">
      <span>Digital Comics</span>
    </div>
    <div>
      <img src="{{Vite::asset("resources/img/buy-comics-merchandise.png")}}"/>
      <span>DC Merchandise</span>
    </div>
    <div>
      <img src="{{Vite::asset("resources/img/buy-comics-shop-locator.png")}}" />
      <span>Subscription</span>
    </div>
    <div>
      <img src="{{Vite::asset("resources/img/buy-comics-subscriptions.png")}}" />
      <span>Comic shop locator</span>
    </div>
    <div>
      <img src="{{Vite::asset("resources/img/buy-dc-power-visa.svg")}}" />
      <span>Dc</span>
    </div>
   </div>
</section>

@endsection

