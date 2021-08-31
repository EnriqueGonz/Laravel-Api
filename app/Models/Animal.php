<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $table="animal";
    protected $primaryKey="id";
    protected $fillable =[
        'nombre','nombre_dueno','id_tipo_animal'
    ];
}
