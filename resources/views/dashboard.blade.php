@extends('layouts.dash')
@section('title',"dashboard")
@section('dashboard',"#e9e9e9")
@section('content')
<div class="home_content">
        <div class="home_produits">
            <img src="{{asset('storage/imgs/produits.jpg')}}" alt="">
            <div class="body">
                <h4>produits inserés : <span>{{$nombre_produits}}</span></h4>
                <a href="/produits"  class="btn">savoir plus</a>
            </div>
        </div>
        <div class="home_commands">
            <img src="{{asset('storage/imgs/commands.jpg')}}" alt="">
            <div class="body">
                <h4>commands in progress : <span>{{$nombre_commands}}</span></h4>
                <a href="/commands" class="btn">savoir plus</a>
            </div>
        </div>
        <div class="home_income">
            <img src="{{asset('storage/imgs/admin.jpg')}}" alt="">
            <div class="body">
                <h4>l'income : <span>{{$income}}</span> MAD</h4>
                <a href="/commands" class="btn">savoir plus</a>
            </div>
        </div>
    </div>

@endsection