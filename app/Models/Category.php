<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public $fillable = ["libelle", "description"];

    public function produits()
    {
        return $this->hasMany(Produit::class);
    }

}
