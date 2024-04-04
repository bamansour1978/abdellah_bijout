<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="ico.png" type="image/x-icon">
</head>
<body>
    @extends('layouts.dash')
@section('title',"details")
@section('produits',"#e9e9e9")
@section('content')
    <div class="container" style="background-color: #fff ; border-radius:20px ; padding:20px ;" >
        @foreach($produits as $produit)
        <div class="container">
                <p><span style="font-weight: bold">category :</span> {{$produit->category}}</p>
                <p><span style="font-weight: bold">reference :</span>  {{$produit->reference}}</p>
                <p><span style="font-weight: bold">price :</span>  {{$produit->price}} MAD</p>
                <p><span style="font-weight: bold">size :</span>  {{$produit->size}}</p>
                <p><span style="font-weight: bold">weight :</span>  {{$produit->weight}}</p>
                <p><span style="font-weight: bold">modele :</span>  {{$produit->modele}}</p>
                <p><span style="font-weight: bold">image :</span>  {{$produit->image}}</p>
                <p><span style="font-weight: bold">nouvaute :</span>  {{$produit->nouvaute}}</p>
                <a href="{{url('edit/'.$produit->id)}}" class="btn btn-success">update</a>
                <a class="btn btn-danger" href="{{URL('deletep',$produit->id)}}" onclick="return confirm('are you sure ??')">delete</a>
        </div>
        @endforeach
    </div>
@stop
</body>
</html>