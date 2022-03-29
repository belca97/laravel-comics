@extends('layouts.base')

@section('pageTitle', 'home')
    
@section('content')
<div class="container">

    @foreach ($fumetti as $fumetto )
            <div class="box-img">
                <img src="{{$fumetto['thumb']}}" :alt="{{$fumetto['thumb']}}"">
                <h3>{{$fumetto['series']}}</h3> 
            </div>
        
    @endforeach

    <div class="container-button">
        <button class="button-main">LOAD MORE</button>
    </div>
</div>
@endsection
