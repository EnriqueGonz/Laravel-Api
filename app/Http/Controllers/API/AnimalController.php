<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal;
use App\Http\Requests\GuardarAnimalRequest;
use App\Http\Requests\ActualizarAnimalRequest;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Animal::select('animal.id','animal.nombre','animal.nombre_dueno','animal.id_tipo_animal','tipo_animal.tipo')
        ->join('tipo_animal','tipo_animal.id','animal.id_tipo_animal')
        ->get();
        return $query;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarAnimalRequest $request)
    {
        Animal::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => "create success"
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        return response()->json([
            'res'=> true,
            'animal' => $animal,

        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarAnimalRequest $request, Animal $animal)
    {
        $animal->update($request->all());
        return response()->json([
            'res'=> true,
            'msg' => "update success",

        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return response()->json([
            'res'=> true,
            'msg' => "delete success",

        ],200);
    }
}
