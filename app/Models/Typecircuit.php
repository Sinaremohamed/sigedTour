<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typecircuit extends Model
{
    use HasFactory;

    protected $table="avt";

    protected $fillable=[
        "libellecourt",
        "libellelong",
        "description"
    ];
    protected $casts = [
        "libellecourt"=> "boolean",
        "libellelong"=> "boolean",
        "description"=> "boolean"
    ];
    public static array $rules = [
        "id"=> "required",
        "libellecourt"=> "nullable|boolean",
        "libellelong"=> "nullable|boolean",
        "description"=> "nullable|boolean"
    ];
}
