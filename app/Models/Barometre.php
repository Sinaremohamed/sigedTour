<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barometre extends Model
{
    use HasFactory;

    protected $table="activite";

    protected $fillable=[
        "avt_id",
        "utilisateur_id",
        "cat_licence",
        "agrement_iata",
        "nb_billetterie",
        "ca_billetterie",
        "nb_circuits",
        "ca_a_connexes",
        "influence_posi",
        "influence_nega",
        "sondage1",
        "sondage2",
        "sondage3",
        "sondage4",
        "sondage5",
        "sondage6",
        "previsions1",
        "previsions2",
        "previsions3"
    ];
    protected $casts = [
        "avt_id"=> "boolean",
        "utilisateur_id"=> "boolean",
        "cat_licence"=> "boolean",
        "agrement_iata"=> "boolean",
        "nb_billetterie"=> "boolean",
        "ca_billetterie"=> "boolean",
        "nb_circuits"=> "boolean",
        "ca_a_connexes"=> "boolean",
        "influence_posi"=> "boolean",
        "influence_nega"=> "boolean",
        "sondage1"=> "boolean",
        "sondage2"=> "boolean",
        "sondage3"=> "boolean",
        "sondage4"=> "boolean",
        "sondage5"=> "boolean",
        "sondage6"=> "boolean",
        "previsions1"=> "boolean",
        "previsions2"=> "boolean",
        "previsions3"=> "boolean"

    ];
    public static array $rules = [
        "id"=> "required",
        "avt_id"=> "nullable|boolean",
        "utilisateur_id"=> "nullable|boolean",
        "cat_licence"=> "nullable|boolean",
        "agrement_iata"=> "nullable|boolean",
        "nb_billetterie"=> "nullable|boolean",
        "ca_billetterie"=> "nullable|boolean",
        "nb_circuits"=> "nullable|boolean",
        "ca_a_connexes"=> "nullable|boolean",
        "influence_posi"=> "nullable|boolean",
        "influence_nega"=> "nullable|boolean",
        "sondage1"=> "nullable|boolean",
        "sondage2"=> "nullable|boolean",
        "sondage3"=> "nullable|boolean",
        "sondage4"=> "nullable|boolean",
        "sondage5"=> "nullable|boolean",
        "sondage6"=> "nullable|boolean",
        "previsions1"=> "nullable|boolean",
        "previsions2"=> "nullable|boolean",
        "previsions3"=> "nullable|boolean"
    ];

    public function avt()
    {
        return $this->hasMany(Avt::class,'avt_id');
    }

    public function utilisateur()
    {
        return $this->hasMany(Utilisateur::class,'utilisateur_id');
    }
}
