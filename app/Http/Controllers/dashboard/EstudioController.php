<?php

namespace App\Http\Controllers\dashboard;

use DateTime;
use App\Models\Estudio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostEstudio;

class EstudioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */

    public function index()
    {
        
       $estudios = Estudio::orderBy('created_at','desc')->paginate(4);
       return view('dashboard.estudio.index', ['estudios'=>$estudios]); //si los pongo en plural marca error
       //return view('dashboard.estudio._form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.estudio.estudio', ['estudio'=> new Estudio()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostEstudio $request)
    {
       /*
       $request->tipo;
        $request->fechaRealizacion;
        $request->asistencia;
        $request->fechaEntrega;
        $request->fechaProximo;
        $request->fechaRevision;
        $request->resultado;
        $request->documento;
        */

        if($request->hasFile("documento")){
            
            $hora = str_replace(":", "", $request->horaRealizacion)."00";

                $file=$request->file("documento");
                //dd($request);
                $nombre = $request->tipo."-".$request->fechaRealizacion."-".$hora.".".$file->guessExtension();

                $ruta = public_path("storage/".$nombre);

                if($file->guessExtension()=="pdf"){
                    copy($file, $ruta);
                }else{
                    dd("NO ES UN PDF O ES DEMASIADO GRANDE");

                }
            
        }

        //$request->ruta=$ruta;
       // dd($request);

        //$request->file('documento')->store('public');

        
        Estudio::create($request->validated()); 
        //dd($request);
        return back()->with('status','Registro de estudio creado Satisfactoriamente');
        
    }

   
    public function show($id)
    {
        $estudio = Estudio::findOrFail($id);
        if(isset($estudio)) return view('dashboard.estudio.show',['estudio'=>$estudio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudio $estudio)
    {
        return view('dashboard.estudio.edit',['estudio'=>$estudio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostEstudio $request, Estudio $estudio)
    {
        $estudio->update($request->validated());
        return back()->with('status','Registro de estudio actualizado Satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudio $estudio)
    {
        $estudio->delete();
        return back()->with('status','Registro de estudio eliminado Satisfactoriamente');
    }


    public function descargar($file)
    {
        //dd($file);
        return response()->download("/public/pdf/$file");
        
    }
}