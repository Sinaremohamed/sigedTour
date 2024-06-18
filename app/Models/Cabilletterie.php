<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabilletterie extends Model
{
    use HasFactory;

    protected $table="avt";

    protected $fillable=[
        "typebillet_id",
        "formulaire_id",
        "continent_id",
        "mois",
        "recettes_vente"
    ];
    protected $casts = [
        "typebillet_id"=> "boolean",
        "formulaire_id"=> "boolean",
        "mois"=> "boolean",
        "recettes_vente"=> "boolean"
    ];
    public static array $rules = [
        "id"=> "required",
        "typebillet_id"=> "nullable|boolean",
        "formulaire_id"=> "nullable|boolean",
        "mois"=> "nullable|boolean",
        "recettes_vente"=> "nullable|boolean"
    ];

    public function formulaires()
    {
        return $this->hasMany(Formulaire::class,'formulaire_id');
    }

    public function typebillet()
    {
        return $this->hasMany(Typebillet::class,'typebillet_id');
    }
}
