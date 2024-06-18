<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compagnie extends Model
{
    use HasFactory;

    protected $table="avt";

    protected $fillable=[
        "nom",
        "nomcomplet",
        "description"
    ];
    protected $casts = [
        "nom"=> "boolean",
        "nomcomplet"=> "boolean",
        "description"=> "boolean"
    ];
    public static array $rules = [
        "id"=> "required",
        "nom"=> "nullable|boolean",
        "nomcomplet"=> "nullable|boolean",
        "description"=> "nullable|boolean"
    ];
}
