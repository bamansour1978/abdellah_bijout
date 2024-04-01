<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\view\view;
use App\Models\Command;

class MainController extends Controller
{
    public function index(){
        $produits=DB::select('select * from produits limit 6');
        $categories=DB::select('select distinct category from produits');
        $sliders=DB::select('select * from produits where nouvaute = "DEUXIEME MAIN"  limit 8');
        return view('home',compact("produits","categories","sliders"));
        
    }

    public function search(Request $request){
        $search=$request->search;
        $produits=DB::select("select * from produits where nouvaute=? or category=? or modele=?",[$search,$search,$search]);
        return view("search",compact("produits"));
    }

    public function products(){
        $produits=DB::select('select * from produits order by price desc');
        $categories=DB::select('select distinct category from produits');
        return view("products",compact("produits","categories"));
    }

    public function category($category){
        $produits=DB::select('select * from produits where category=?',[$category]);
        $categories=DB::select('select distinct category from produits');
        return view("category",compact("produits","categories"));
    }

    public function contact(){
        return view("contact");
    }

    public function product($id){
        $produits=DB::select('select * from produits where id=?',[$id]);
        return view("product",compact("produits"));
    }

    public function politique(){
        return view("politique");
    }
    public function livraison(){
        return view("livraison");
    }
    public function about(){
        return view("about");
    }

    public function Ajouter(){
    return view("product");
    }

    public function store(Request $request){
    $commande=new Command();
    $commande->name = $request->name;
    $commande->phone = $request->phone;
    $commande->produit_id = $request->produit_id;
    $commande->ville = $request->ville;
    $commande->qty = $request->qty;
    $commande->save();
    return redirect("/product/{$request->produit_id}")->with('success', ['votre commande est envoyé avec succés']);
    }
}