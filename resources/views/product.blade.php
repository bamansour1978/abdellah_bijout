@extends('layouts.app')
@section('title','Product')
@section('content')
<div class="product mt-5 d-flex mx-auto p-4 row" style="background-color: black;">
    @foreach($produits as $produit)
    <div class="img col-sm-6">
        <img src="{{ asset('storage/imgs/' . $produit->image ) }}" alt="" class="w-100">
    </div>
    <div class="content px-4 text-white col-sm-6 text-warning">
        <h3>{{$produit->category}}</h3>
        <h4>{{$produit->nouvaute}}</h4>
        <h5>{{$produit->modele}}</h5>
        <p>SIZE : {{$produit->size}} CM</p>
        <p>WEIGHT : {{$produit->weight}} GR</p>
        <h4 class=" text-danger" style="font-size: 40px">{{$produit->price}} MAD</h4>
        <form action="/ajouter" method="post" class="m-auto pt-3">
            @csrf
            <h4>Order NOW</h4>
            <input type="text" name="name" placeholder="nom et prenom ..." class="form-control mb-3 w-75" required maxlength="30">
            <input type="text" name="phone" placeholder="telephone ..." class="form-control mb-3 w-75" required maxlength="15">
            <input type="hidden" name="produit_id" value="{{$produit->id}}">
            <input type="text" name="ville" placeholder="ville ..." class="form-control mb-3 w-75"> 
            <input type="number" name="qty" placeholder="quantité ..." class="form-control mb-3 w-50" required maxlength="5" value="1">
            <button class="btn btn-warning text-dark">SUBMIT</button>
            <a href=" https://wa.me/+212671060636" class="btn btn-success">Confirm In WhatsApp</a>
        </form>
    </div>
    @endforeach
</div>
@if(session()->has('success'))
    @foreach(session('success') as $message)
        <div class="success_box">
            <div class="container">
                <span class="close_box"><ion-icon name="close"></ion-icon></span>
                <div class="icon_box">
                    <div class="icon">
                        <span><ion-icon name="power-sharp"></ion-icon></span>
                    </div>
                </div>
                <p>{{ $message }}</p>
                <a href=" https://wa.me/+212671060636" class="btn btn-success d-flex mx-auto justify-content-center">passer à la confirmation whatsApp</a>
            </div>
        </div>
    @endforeach
@endif
<style>
        .success_box {
        position: fixed;
        z-index: 15;
        left: 30%;
        bottom: 10%;
        background-color: #f2f0f0;
        width: 600px;
        height: 500px;
        border-radius: 20px;
        padding: 20px;
        box-shadow: 0 0 8px #1d1c1c;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .success_box p {
        text-align: center;
        font-size: 22px;
        color: #1d1c1c;
    }

    .success_box .boxp {
        color: #19b019;
    }

    .success_box .close_box {
        background-color: red;
        position: absolute;
        left: 0;
        top: 0;
        padding: 5px 8px;
        font-size: 22px;
        color: #f2f0f0;
        justify-content: center;
        align-items: center;
        border-bottom-right-radius: 20px;
        cursor: pointer;
    }

    .success_box .icon_box {
        width: 100%;
        height: 80px;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .success_box .icon_box .icon {
        width: 80px;
        height: 100%;
        border: 4px solid #19b019;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .success_box .icon_box .icon span {
        font-size: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #1d1c1c;
    }
    @media screen and (max-width:900px) {
        .success_box {
        left: 14%;
        width: 300px;
        height: 250px;
    }
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    let successbox = document.querySelector(".success_box");
    let closebox = document.querySelector(".close_box");

    closebox.onclick = () => {
        successbox.style.display = "none"
    }
    });
</script>
<div class="row d-flex mt-5 mb-5 py-5 mx-auto bg-warning">
    <div class="col-md-5 col-lg-4 col-xl-2 mx-auto mb-4 text-center pt-3  text-black">
        <span style="font-size:35px" class="mb-3"><ion-icon name="bicycle-outline"></ion-icon></span>
        <h6>Free Delivery</h6>
    </div>
    <div class="col-md-5 col-lg-4 col-xl-2 mx-auto mb-4 text-center pt-3 text-black">
        <span style="font-size:35px" class="mb-3"><ion-icon name="diamond-outline"></ion-icon></span>
        <h6>High Quality</h6>
    </div>
    <div class="col-md-5 col-lg-4 col-xl-2 mx-auto mb-4 text-center pt-3 text-black">
        <span style="font-size:35px" class="mb-3"><ion-icon name="headset-outline"></ion-icon></span>
        <h6>Support 24/7 Online</h6>
    </div>
    <div class="col-md-5 col-lg-4 col-xl-2 mx-auto mb-4 text-center pt-3 text-black">
        <span style="font-size:35px" class="mb-3"><ion-icon name="shield-checkmark-outline"></ion-icon></span>
        <h6>siteweb 100% security</h6>
    </div>
</div>
@endsection