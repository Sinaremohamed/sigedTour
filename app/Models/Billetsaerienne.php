<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billetsaerienne extends Model
{
    use HasFactory;

    protected $table="avt";

    protected $fillable=[
        "formulaire_id",
        "compagnie_id",
        "mois1",
        "mois2",
        "mois3"
    ];
    protected $casts = [
        "formulaire_id"=> "boolean",
        "compagnie_id"=> "boolean",
        "mois1"=> "boolean",
        "mois2"=> "boolean",
        "mois3"=> "boolean"
    ];
    public static array $rules = [
        "id"=> "required",
        "formulaire_id"=> "nullable|boolean",
        "compagnie_id"=> "nullable|boolean",
        "mois1"=> "nullable|boolean",
        "mois2"=> "nullable|boolean",
        "mois3"=> "nullable|boolean"
    ];

    public function formulaires()
    {
        return $this->hasMany(Formulaire::class,'formulaire_id');
    }

    public function compagnie()
    {
        return $this->hasMany(Compagnie::class,'compagnie_id');
    }
}
