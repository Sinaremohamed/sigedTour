<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulaire extends Model
{
    use HasFactory;
    protected $table = "formulaire";

    protected $fillable=[
        "utilisateur_id",
        "logo"
    ];
    protected $casts = [
        "utilisateur_id"=> "boolean",
        "logo"=> "boolean"
    ];


        public function avt() {
            return $this->belongsTo(Avt::class,"id");
        }

        public function emploi() {
            return $this->belongsTo(Emploi::class,"id");
        }

        public function activite() {
            return $this->belongsTo(Billetsaerienne::class,"id");
        }

        public function utilisateur() {
            return $this->hasMany(Utilisateur::class,"id");
        }

        public function vactivite() {
            return $this->belongsTo(Vactivite::class,"id");
        }

        public function cacircuit() {
            return $this->belongsTo(Cacircuit::class,"id");
        }

        public function zone() {
            return $this->belongsTo(Zone::class,"id");
        }

        public function billetscontinent() {
            return $this->belongsTo(Billetscontinent::class,"id");
        }

        public function cabilletterie() {
            return $this->belongsTo(Cabilletterie::class,"id");
        }

        public function billetsaerienne() {
            return $this->belongsTo(Billetsaerienne::class,"id");
        }

}
