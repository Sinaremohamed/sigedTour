<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avt extends Model
{
    use HasFactory;

    protected $table="avt";

    protected $fillable=[
        "formulaire_id",
        "denomination",
        "categorie",
        "adresse_postale",
        "tel",
        "email",
        "site_internet",
        "periode_exercice"
    ];
    protected $casts = [
        "formulaire_id"=> "boolean",
        "denomination"=> "boolean",
        "categorie"=> "boolean",
        "adresse_postale"=> "boolean",
        "tel"=> "boolean",
        "email"=> "boolean",
        "site_internet"=> "boolean",
        "periode_exercice"=> "boolean"

    ];

    public function formulaires()
    {
        return $this->hasMany(Formulaire::class,'formulaire_id');
    }
}
