<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion_Mascota_Doctor extends Model
{
    public $timestamps = false;
    protected $table="asignacion_mascota_doctor";
    protected $primaryKey="id";
    protected $fillable =[
        'id_doctor','id_animal'
    ];
}
