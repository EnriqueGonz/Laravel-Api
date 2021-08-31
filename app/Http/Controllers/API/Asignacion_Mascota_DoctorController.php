<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asignacion_Mascota_Doctor;

class Asignacion_Mascota_DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Asignacion_Mascota_Doctor::all();
        $query = Asignacion_Mascota_Doctor::select('asignacion_mascota_doctor.id','animal.nombre as nombre_mascota','doctor.nombre as nombre_doctor','doctor.apellidos as apellidos_doctor','doctor.id as id_doctor')
        ->join('animal','animal.id','asignacion_mascota_doctor.id_animal')
        ->join('doctor','doctor.id','asignacion_mascota_doctor.id_doctor')
        ->get();
        return $query;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
