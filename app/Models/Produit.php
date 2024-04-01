<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillabel=["id","category","reference","price","size","weight","modele","image","nouvate"];
    use HasFactory;
}
