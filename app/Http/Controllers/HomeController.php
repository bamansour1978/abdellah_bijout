<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Produit;
use App\Models\Command;
use App\Models\User;;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $nombre_produits=DB::table("produits")->count();
        $nombre_commands=DB::table("commands")->where("situation","in progress")->count();
        $income=DB::table('produits')
        ->join('commands', 'produits.id', '=', 'commands.produit_id')
        ->where('commands.situation', 'confirmed')
        ->sum(DB::raw('produits.price * commands.qty'));
        return view('dashboard',compact("nombre_produits","nombre_commands","income"));
    }

    public function commands(){
        $commands=Command::with("getProduit")->orderBy('situation', 'desc')->get();
        return view('commands',compact("commands"));
    }

    public function produits(){
        $produits=DB::select("select * from produits");
        return view('produits',compact("produits"));
    }

    public function admins(){
        $admins=DB::select("select * from users");
        return view('admins',compact("admins"));
    }

    public function ajouter(){
        return view("create");
    }

    public function store(Request $request){
        $produit=new Produit();
        $produit->category = $request->category;
        $produit->reference = $request->reference;
        $produit->price = $request->price;
        $produit->size = $request->size;
        $produit->weight = $request->weight;
        $produit->modele = $request->modele;
        $produit->image = $request->image;
        $produit->nouvaute = $request->nouvaute;
        $produit->save();
        return redirect("/produits");
    }

    public function ajouterImg(){
        return view("addImg");
    }

    public function storeImg(Request $request){
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            Storage::putFileAs('public/imgs', $image, $filename);
        }
        return redirect("/produits");
    }


    public function details($id){
        $produits=DB::select('select * from produits where id= ?',[$id]);
        return view("details",compact("produits"));
    }

    public function edit($id){
        $produit=Produit::find($id);
        return view("edit",compact("produit"));
    }

    public function update(Request $request,$id){
        $produit=Produit::find($id);
        $produit->category = $request->category;
        $produit->reference = $request->reference;
        $produit->price = $request->price;
        $produit->size = $request->size;
        $produit->weight = $request->weight;
        $produit->modele = $request->modele;
        $produit->image = $request->image;
        $produit->nouvaute = $request->nouvaute;
        $produit->update();
        return redirect("/produits");
    }

    public function canceledcommand(Request $request,$id){
        $command=Command::find($id);
        $command->situation = $request->situation;
        $command->update();
        return redirect("/commands");
    }

    public function confirmedcommand(Request $request,$id){
        $command=Command::find($id);
        $command->situation = $request->situation;
        $command->update();
        return redirect("/commands");
    }

    public function destroyp($id){
        $produit = Produit::find($id);
        $produit->delete();
        return redirect("/produits");
    }

    public function destroyc($id){
        $produit = Command::find($id);
        $produit->delete();
        return redirect("/commands");
    }

    public function destroya($id){
        $user = User::find($id);
        $user->delete();
        return redirect("/admins");
    }

    public function addadmin(){
        return view("addadmin");
    }

    public function createadmin(Request $request)
    {
        $admin=new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->save();
        return redirect("/admins");
    }

}