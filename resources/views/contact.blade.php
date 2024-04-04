@extends('layouts.app')
@section('title','Contact')
@section('content')
<h3 class="text-center mt-5 text-warning" style="font-size: 40px">CONTACT US</h3>
<p class="text-center text-warning" style="font-size: 40px">Support 24/7</p>
<div class="d-flex row mt-5 mx-auto">
    <div class="card col-md-5 col-lg-4 col-xl-2 mx-auto mb-4 text-center pt-3">
        <img src="{{ asset('storage/imgs/wtp.png') }}" alt="" class="card-img-top mx-auto" style="width: 150px">
        <div class="card-body">
            <h5 class="card-text" style="font-size: 25px">whatsApp | phone</h5>
            <p class="card-text">+212 00000000000</p>
            <a href="" class="btn btn-dark">MESSAGE</a>
        </div>
    </div>
    <div class="card col-md-5 col-lg-4 col-xl-2 mx-auto mb-4 text-center pt-3">
        <img src="{{ asset('storage/imgs/gmail.png') }}" alt="" class="card-img-top mx-auto" style="width: 150px">
        <div class="card-body">
            <h5 class="card-text" style="font-size: 25px">email</h5>
            <p class="card-text" style="font-size: 15px">email@gmail.com</p>
            <a href="" class="btn btn-dark">MESSAGE</a>
        </div>
    </div>
    <div class="card col-md-5 col-lg-4 col-xl-2 mx-auto mb-4 text-center pt-3">
        <img src="{{ asset('storage/imgs/insta.png') }}" alt="" class="card-img-top mx-auto" style="width: 150px">
        <div class="card-body">
            <h6 class="card-text" style="font-size: 25px">instagram</h6>
            <p class="card-text" style="font-size: 14px">JEWERLY_motawakil</p>
            <a href="https://www.instagram.com/" class="btn btn-dark">MESSAGE</a>
        </div>
    </div>
    <div class="card col-md-5 col-lg-4 col-xl-2 mx-auto mb-4 text-center pt-3">
        <img src="{{ asset('storage/imgs/fb.png') }}" alt="" class="card-img-top mx-auto" style="width: 150px">
        <div class="card-body">
            <h5 class="card-text" style="font-size: 25px">facebook</h5>
            <p class="card-text" style="font-size: 14px">JEWERLY Motawakil</p>
            <a href="https://www.facebook.com/" class="btn btn-dark">MESSAGE</a>
        </div>
    </div>
    <div class="card col-md-5 col-lg-4 col-xl-2 mx-auto mb-4 text-center pt-3">
        <img src="{{ asset('storage/imgs/tiktok.png') }}" alt="" class="card-img-top mx-auto" style="width: 150px">
        <div class="card-body">
            <h6 class="card-text" style="font-size: 25px">tiktok</h6>
            <p class="card-text" style="font-size: 14px">JEWERLY.motawakil</p>
            <a href="https://www.tiktok.com/" class="btn btn-dark">MESSAGE</a>
        </div>
    </div>
</div>
@endsection