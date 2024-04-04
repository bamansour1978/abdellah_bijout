@extends('layouts.dash')
@section('title',"Update product")
@section('produits',"#e9e9e9")
@section('content')
<div class="container" style="background-color: #fff ; border-radius:20px ; padding:20px ; text-align:center" >
    <h3>Update product</h3>
    <form action="{{url('update',$produit->id)}}" method="post" class="mx-auto pt-3" style="width : 50%">
        @csrf
        @method("PUT")
        <input type="text" name="category" required value="{{ $produit->category }}" placeholder="category" class="form-control mb-2">
        <input type="text" name="reference" required value="{{ $produit->reference }}"  placeholder="reference" class="form-control mb-2">
        <input type="number" name="price" required value="{{$produit->price}}" placeholder="price" class="form-control mb-2">
        <input type="text" name="size" required value="{{$produit->size}}" class="form-control mb-2"  placeholder="size">
        <input type="text" name="weight" required value="{{$produit->weight}}" class="form-control mb-2" placeholder="weight">
        <input type="text" name="modele" required value="{{$produit->modele}}" class="form-control mb-2" placeholder="modele">
        <input type="text" name="image" required value="{{$produit->image}}" class="form-control mb-3" placeholder="image">
        <input type="text" name="nouvaute" required value="{{$produit->nouvaute}}" class="form-control mb-3" placeholder="nouvaute">
        <button class="btn btn-primary">update</button>
    </form>
</div>
@stop