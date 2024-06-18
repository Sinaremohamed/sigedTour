<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    protected $table="avt";

    protected $fillable=[
        "formulaire_id",
        "continent_id",
        "typecircuit_id",
        "residents",
        "mois1",
        "mois2",
        "mois3"
    ];
    protected $casts = [
        "formulaire_id"=> "boolean",
        "continent_id"=> "boolean",
        "typecircuit_id"=> "boolean",
        "residents"=> "boolean",
        "mois1"=> "boolean",
        "mois2"=> "boolean",
        "mois3"=> "boolean"
    ];
    public static array $rules = [
        "id"=> "required",
        "formulaire_id"=> "nullable|boolean",
        "continent_id"=> "nullable|boolean",
        "typecircuit_id"=> "nullable|boolean",
        "residents"=> "nullable|boolean",
        "mois1"=> "nullable|boolean",
        "mois2"=> "nullable|boolean",
        "mois3"=> "nullable|boolean"
    ];

    public function formulaires()
    {
        return $this->hasMany(Formulaire::class,'formulaire_id');
    }

    public function continent()
    {
        return $this->hasMany(Continent::class,'continent_id');
    }
}
