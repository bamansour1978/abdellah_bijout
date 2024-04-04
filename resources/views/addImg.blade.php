@extends('layouts.dash')
@section('title',"Add image")
@section('produits',"#e9e9e9")
@section('content')
<div class="container" style="background-color: #fff ; border-radius:20px ; padding:20px ; text-align:center" >
    <h3>add image to public</h3>
    <form action="/ajouterImg" method="post" enctype="multipart/form-data" class="mx-auto pt-3" style="width : 50%">
        @csrf
        <input type="file" name="image" class="form-control mb-3">
        <button class="btn btn-primary">add image</button>
    </form>
</div>
@stop