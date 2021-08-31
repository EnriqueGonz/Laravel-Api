<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $timestamps = false;
    protected $table="doctor";
    protected $primaryKey="id";
    protected $fillable =[
        'nombre','apellidos','edad','telefono'
    ];
}
