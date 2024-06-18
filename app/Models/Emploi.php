<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;

    protected $table="avt";

    protected $fillable=[
        "formulaire_id",
        "categorie_socio_p",
        "nat_h",
        "nat_f",
        "nat_ens",
        "autr_nat_h",
        "autr_nat_f",
        "autr_nat_ens"
    ];
    protected $casts = [
        "formulaire_id"=> "boolean",
        "categorie_socio_p"=> "boolean",
        "nat_h"=> "boolean",
        "nat_f"=> "boolean",
        "nat_ens"=> "boolean",
        "autr_nat_h"=> "boolean",
        "autr_nat_f"=> "boolean",
        "autr_nat_ens"=> "boolean"
    ];
    public static array $rules = [
        "id"=> "required",
        "formulaire_id"=> "nullable|boolean",
        "categorie_socio_p"=> "nullable|boolean",
        "nat_h"=> "nullable|boolean",
        "nat_f"=> "nullable|boolean",
        "nat_ens"=> "nullable|boolean",
        "autr_nat_h"=> "nullable|boolean",
        "autr_nat_f"=> "nullable|boolean",
        "autr_nat_ens"=> "nullable|boolean"
    ];

    public function formulaires()
    {
        return $this->hasMany(Formulaire::class,'formulaire_id');
    }
}
