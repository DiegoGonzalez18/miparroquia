<?php

namespace App\Http\Controllers;

use App\HorarioEstandar;
use Illuminate\Http\Request;

class HorarioEstandarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       try {
           //lunes
            $this->registrardias("lunes",count($request->lunes),$request->lunes);

       //martes
       $this->registrardias("martes",count($request->martes),$request->martes);
       //miercoles
       $this->registrardias("miercoles",count($request->miercoles),$request->miercoles);
       //jueves
       $this->registrardias("jueves",count($request->jueves),$request->jueves);
       //viernes
       $this->registrardias("viernes",count($request->viernes),$request->viernes);

       //sabado
       $this->registrardias("sabado",count($request->sabado),$request->sabado);
       //domingo

       $this->registrardias("domingo",count($request->domingo),$request->domingo);
       } catch (\Throwable $th) {
           //throw $th;

           return response()->json([
            'success' => false,
            'error'=>$th
          
        ], 400);
       }
        //
        
    }

public function registrardias($dia,$tamaño,$array){
    // "[5:04,1:03]
   try {
       //code...
       for($i=0;$i<$tamaño;$i++){
        $horario=new HorarioEstandar();
        $horario->dia=$dia;
        $horario->hora=$array[$i];
        $horario->save();
    }


   } catch (\Throwable $th) {
       //throw $th;

       return response()->json([
        'success' => false,
        'error'=>$th
      
    ], 400);
   }
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
