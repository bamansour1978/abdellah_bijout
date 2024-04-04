@extends('layouts.app')
@section('title','Search')
@section('content')
<div class="container col-md-6 mt-5">
        <form action="/search" method="get" class="form-group d-flex mt-5">
            <input type="text" class="form-control mx-2" name="search" placeholder="search ...">
            <button type="submit" class="btn btn-dark">Search</button>
        </form>
    </div>
    <div class="produits p-2 text-center">
        <h2 class="text-warning text-center mb-2" style="font-size: 40px">PRODUCTS</h2>
        <p class="text-warning text-center mb-4" style="font-size: 40px">OUR PRODUCTS</p>
        <div class="row d-flex mx-auto text-md-start">
            @foreach($produits as $produit)
            <div class="col-md-5 col-lg-5 col-xl-4 d-flex mb-4 align-items-center mx-auto">
                <img src="{{ asset('storage/imgs/' . $produit->image ) }}" alt="" style="width:200px;border-radius:20px;margin-right:10px">
                <div class="infos ">
                    <h4 class="card-text text-warning">{{$produit->category}}</h4>
                    <h6 class="card-text text-warning">SIZE : {{$produit->size}} CM</h6>
                    <h6 class="card-text text-warning">WEIGHT : {{$produit->weight}} GR</h6>
                    <h5 class="card-text text-danger" style="font-size: 35px">{{$produit->price}} MAD</h5>
                    <a href="{{url('product/'.$produit->id)}}" class="btn btn-dark">BUY</a>
                </div>
            </div>
            @endforeach
        </div>
@endsection