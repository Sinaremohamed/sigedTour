<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table="avt";

    protected $fillable=[
        "nom",
        "prenom",
        "fonction",
        "tel"
    ];
    protected $casts = [
        "nom"=> "boolean",
        "prenom"=> "boolean",
        "fonction"=> "boolean",
        "tel"=> "boolean"
    ];
    public static array $rules = [
        "id"=> "required",
        "nom"=> "nullable|boolean",
        "prenom"=> "nullable|boolean",
        "fonction"=> "nullable|boolean",
        "tel"=> "nullable|boolean"
    ];

    public function formulaire() {
        return $this->belongsTo(Formulaire::class,"formulaire_id");
    }
}
