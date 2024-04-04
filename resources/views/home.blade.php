
@extends('layouts.app')
@section('title','Acceuil')
@section('content')

<div class="img-banner">
    <img class="d-flex w-100 mt-3" src="{{ asset('storage/imgs/banner.jpg') }}" alt="banner">
</div>
<div id="productSlider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner background: rgb(180,137,86)">
            @foreach(array_chunk($sliders, 1) as $chunk)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }} ">
                    <div class="slider-chunk">
                        <div class="slider-width">
                            @foreach($chunk as $sliders)
                            <div class="slider-container">
                                <img src="{{ asset('storage/imgs/' . $sliders->image ) }}" class="slider-img" alt="{{ $sliders->category }}">
                                <div>
                                    <h5>{{ $sliders->nouvaute }}</h5>
                                    <h4>{{ $sliders->category }}</h4>
                                    <p>size : {{ $sliders->size }} CM</p>
                                    <p>weight : {{ $sliders->weight }} GR</p>
                                    <h6 class="text-danger"style="font-size: 35px">{{ $sliders->price}} MAD</h6>
                                    <a href="{{url('product/'.$sliders->id)}}" class="btn btn-dark mt-1">Explore</a>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#productSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#productSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="bg-warning mx-auto mt-3 mb-3 px-5 py-4 d-flex row align-items-center">
        <div class="col-md-5 col-lg-4 col-xl-5 mx-auto mb-3">
            <h4 class="text-black">JEWELRY Motawakil</h4>
            <h2 class="text-black">Custome ORDER</h2>
            <p class="text-black">Tailored to your specific needs to ensure your complete satisfaction.</p>
            <a href=" https://wa.me/+2120775046632" class="btn btn-dark text-warning">ORDER</a>
        </div>
        <div class="col-md-5 col-lg-5 col-xl-5 mx-auto text-center">
            <img src="{{ asset('storage/imgs/cmd.jpg') }}" alt="" style="width:400px;border-radius:20px">
        </div>
    </div>
    <div class="categories text-center bg-black p-2 my-4">
        <h2 class="text-warning" style="font-size: 40px">CATEGORY</h2>
        <p class="text-warning" style="font-size: 40px">Explore Our Gategory</p>
        <div class="row d-flex text-center mx-auto p-3">
        <div class="col mx-auto my-2">
            <a href="{{url('category/KHATEM')}}" class="btn btn-warning text-black px-4 py-1 font-weight-bold">RINGS</a>
        </div>
        <div class="col mx-auto my-2">
            <a href="{{url('category/BRACELET')}}" class="btn btn-warning text-black px-4 py-1 font-weight-bold">BRACELET</a>
        </div>
        <div class="col mx-auto my-2">
            <a href="{{url('category/EARRING')}}" class="btn btn-warning text-black px-4 py-1 font-weight-bold">EARRING</a>
        </div>
        <div class="col mx-auto my-2">
            <a href="{{url('category/CHAINE')}}" class="btn btn-warning text-black px-4 py-1 font-weight-bold">CHAINE</a>
        </div>
        <div class="col mx-auto my-2">
            <a href="{{url('category/MARRIAGE')}}" class="btn btn-warning text-black px-4 py-1 font-weight-bold">MARRIAGE</a>
        </div>
    </div>
    </div>
    <div class="produits p-2 text-center">
        <h2 class="text-warning text-center mb-2" style="font-size: 40px">PRODUCTS</h2>
        <p class="text-warning text-center mb-4" style="font-size: 40px">Our Products Suggested</p>
        <div class="row d-flex mx-auto text-md-start">
            @foreach($produits as $produit)
            <div class="col-md-5 col-lg-5 col-xl-4 d-flex mb-4 align-items-center mx-auto">
                <img src="{{ asset('storage/imgs/' . $produit->image ) }}" alt="" style="width:200px;border-radius:20px;margin-right:10px">
                <div class="infos ">
                    <h4 class="card-text text-warning">{{$produit->category}}</h4>
                    <h5 class="card-text text-warning">{{$produit->modele}}</h5>
                    <h6 class="card-text text-warning">SIZE : {{$produit->size}} CM</h6>
                    <h6 class="card-text text-warning">WEIGHT : {{$produit->weight}} GR</h6>
                    <h5 class="card-text text-danger" style="font-size: 35px">{{$produit->price}} MAD</h5>
                    <a href="{{url('product/'.$produit->id)}}" class="btn btn-dark">Buy</a>
                </div>
            </div>
            @endforeach
        </div>
        <a href="/products" class="btn btn-warning my-3 my-4">Explore more</a>
    </div>
    <div class="row d-flex mt-5 mb-5 py-5 mx-auto bg-warning">
        <div class="col-md-5 col-lg-4 col-xl-2 mx-auto mb-4 text-center pt-3  text-black">
            <span style="font-size:35px" class="mb-3"><ion-icon name="bicycle-outline"></ion-icon></span>
            <h6>Free Delivery</h6>
        </div>
        <div class="col-md-5 col-lg-4 col-xl-2 mx-auto mb-4 text-center pt-3 text-black">
            <span style="font-size:35px" class="mb-3"><ion-icon name="diamond-outline"></ion-icon></span>
            <h6>Good Quality</h6>
        </div>
        <div class="col-md-5 col-lg-4 col-xl-2 mx-auto mb-4 text-center pt-3 text-black">
            <span style="font-size:35px" class="mb-3"><ion-icon name="headset-outline"></ion-icon></span>
            <h6>Support 24/7 Online</h6>
        </div>
        <div class="col-md-5 col-lg-4 col-xl-2 mx-auto mb-4 text-center pt-3 text-black">
            <span style="font-size:35px" class="mb-3"><ion-icon name="shield-checkmark-outline"></ion-icon></span>
            <h6>Siteweb 100% Security</h6>
        </div>
    </div>
    @endsection
    