@extends('layouts.app')
@section('title','About')
@section('content')
<div class="bg-black mt-5 p-4">
    <div class="about mx-auto text-white">
            <img src="{{ asset('storage/imgs/cosmetiques.jpg') }}" alt="">
        <div class="about-body">
            <h2> Bijouterie MOTAWAKIL</h2>
            <h5>magasin D'or et de Diammond</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos, ipsum similique. Neque fugiat iure, accusantium laboriosam placeat minima corrupti repellendus fugit id aliquid cupiditate omnis vero itaque quasi repellat. Fugit!</p>
        </div>
    </div>
</div>
@endsection