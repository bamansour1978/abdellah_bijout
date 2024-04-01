<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produit;

class Command extends Model
{
    use HasFactory;
    protected $fillable=["id","name","phone","produit_id","qty"];

    public function getProduit(){
        return $this->belongsTo(produit::class,'produit_id','id');
    }
}
