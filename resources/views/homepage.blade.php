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
@endsection

