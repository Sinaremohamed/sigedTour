<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vactivite extends Model
{
    use HasFactory;

    protected $table="avt";

    protected $fillable=[
        "formulaire_id",
        "typecircuit_id",
        "mois1",
        "mois2",
        "mois3",
        "nbcircuits",
        "nbtourisme"
    ];
    protected $casts = [
        "formulaire_id"=> "boolean",
        "typecircuit_id"=> "boolean",
        "mois1"=> "boolean",
        "mois2"=> "boolean",
        "mois3"=> "boolean",
        "nbcircuits"=> "boolean",
        "nbtourisme"=> "boolean"
    ];
    public static array $rules = [
        "id"=> "required",
        "formulaire_id"=> "nullable|boolean",
        "typecircuit_id"=> "nullable|boolean",
        "mois1"=> "nullable|boolean",
        "mois2"=> "nullable|boolean",
        "mois3"=> "nullable|boolean",
        "nbcircuits"=> "nullable|boolean",
        "nbtourisme"=> "nullable|boolean"
    ];

    public function formulaires()
    {
        return $this->hasMany(Formulaire::class,'formulaire_id');
    }

    public function typecircuit()
    {
        return $this->hasMany(Typecircuit::class,'typecircuit_id');
    }
}
