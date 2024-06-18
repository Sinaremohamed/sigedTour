<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;

    protected $table="activite";

    protected $fillable=[
        "formulaire_id",
        "activite",
        "volume_mois1",
        "volume_mois2",
        "volume_mois3",
        "ca_mois1",
        "ca_mois2",
        "ca_mois3"
    ];
    protected $casts = [
        "formulaire_id"=> "boolean",
        "activite"=> "boolean",
        "volume_mois1"=> "boolean",
        "volume_mois2"=> "boolean",
        "volume_mois3"=> "boolean",
        "ca_mois1"=> "boolean",
        "ca_mois2"=> "boolean",
        "ca_mois3"=> "boolean"

    ];
    public static array $rules = [
        "id"=> "required",
        "formulaire_id"=> "nullable|boolean",
        "activite"=> "nullable|boolean",
        "volume_mois1"=> "nullable|boolean",
        "volume_mois2"=> "nullable|boolean",
        "volume_mois3"=> "nullable|boolean",
        "ca_mois1"=> "nullable|boolean",
        "ca_mois2"=> "nullable|boolean",
        "ca_mois3"=> "nullable|boolean"
    ];

    public function formulaires()
    {
        return $this->hasMany(Formulaire::class,'formulaire_id');
    }
}
