@extends('layouts.dash')
@section('title',"Add product")
@section('produits',"#e9e9e9")
@section('content')
<div class="container" style="background-color: #fff ; border-radius:20px ; padding:20px ; text-align:center" >
    <h3>Create product</h3>
    <form action="/ajouterProduit" method="post" class="mx-auto pt-3" style="width : 50%">
        @csrf
        <input type="text" name="category" placeholder="category" class="form-control mb-2">
        <input type="text" name="reference" placeholder="reference" class="form-control mb-2">
        <input type="number" name="price"  placeholder="price" class="form-control mb-2">
        <input type="text" name="size"  class="form-control mb-2"  placeholder="size">
        <input type="text" name="weight" class="form-control mb-2" placeholder="weight">
        <input type="text" name="modele" class="form-control mb-2" placeholder="modele">
        <input type="text" name="image" class="form-control mb-3" placeholder="image">
        <input type="text" name="nouvaute" class="form-control mb-3" placeholder="nouvaute">
        <button class="btn btn-primary">add product</button>
    </form>
</div>
@stop