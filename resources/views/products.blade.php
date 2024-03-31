@extends('layouts.app')
@section('title','products')
@section('content') 

<div class="categories text-center bg-black p-2 my-4">
        <h2 class="text-warning" style="font-size: 40px">CATEGORIES</h2>
        <div class="row d-flex text-center mx-auto p-3">
        @foreach($categories as $category)
        <div class="col mx-auto my-2">
            <a href="{{url('category/'.$category->category)}}" class="btn btn-warning text-black px-4 py-1 font-weight-bold">{{$category->category}}</a>
        </div>
        @endforeach
    </div>
    </div>
<div class="produits p-2 text-center">
        <h2 class="text-warning text-center mb-2" style="font-size: 40px">PRODUCTS</h2>
        <p class="text-warning text-center mb-4" style="font-size: 40px"></p>
        <div class="row d-flex mx-auto text-md-start">
            @foreach($produits as $produit)
            <div class="col-md-5 col-lg-5 col-xl-4 d-flex mb-4 align-items-center mx-auto">
                <img src="{{ asset('imgs/' . $produit->image ) }}" alt="" style="width:200px;border-radius:20px;margin-right:10px">
                <div class="infos ">
                    <h4 class="card-text text-warning">{{$produit->category}}</h4>
                    <h5 class="card-text text-warning">{{$produit->modele}}</h5>
                    <h6 class="card-text text-warning">SIZE : {{$produit->size}} CM</h6>
                    <h6 class="card-text text-warning">WEIGHT : {{$produit->weight}} GR</h6>
                    <h5 class="card-text text-danger" style="font-size: 35px">{{$produit->price}} MAD</h5>
                    <a href="{{url('product/'.$produit->id)}}" class="btn btn-dark">Buy Now</a>
                </div>
            </div>
            @endforeach
        </div>
        @endsection