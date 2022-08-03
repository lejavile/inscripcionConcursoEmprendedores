<?php

namespace App\Http\Controllers;

use App\Models\inscripcionConcurso;
use App\Models\entrepreneurshipEconomicactivity;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Session;
use File;
use Illuminate\Support\Str;

class inscripcionConcursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=entrepreneurshipEconomicactivity::all()->pluck('name','id');
        $message="Registro Satisfactorio";
        $inscripcionConcursoId=Session::get('inscripcion_concurso_id');
        // dd($category);
        return view('welcome', compact('category','message','inscripcionConcursoId'));
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
        $this->validate($request,[ 
            'email' => 'required|email|unique:inscripcion_concurso,email',    
        ]);
        $destino = '/img/inscripcionConcurso/'.$request->cedula.'/';
        $destinoPrivado = public_path($destino);
        
        if (!file_exists($destinoPrivado)) {
            File::makeDirectory($destinoPrivado, $mode = 0777, true, true); 
        }
        $rutaImg = '';
        // dd($request->all());
        // dd($request->file('img_prod'));
        if(!empty($request->file('img_prod'))){                        

            $imagen = $request->file('img_prod');
            if (!empty($imagen)) {
                
                $nombre_imagen = $imagen->getClientOriginalName();
                
                $imagen->move($destinoPrivado, $nombre_imagen);
                
            }
            
            $rutaImg = $destino.$nombre_imagen;
        }
        $concurso  = new inscripcionConcurso;
        $concurso->name  = $request->name;
        $concurso->cod_inscripcion  = $this->generarRamdom();
        $concurso->last_name = $request->last_name;
        $concurso->email = $request->email;
        $concurso->cedula = $request->cedula;
        $concurso->tlf = $request->tlf;
        $concurso->entrepreneurship_economicactivity_id = $request->entrepreneurship_economicactivity_id;
        $concurso->nombre_empre = $request->nombre_empre;
        $concurso->sobre_equipo = $request->sobre_equipo;
        $concurso->define_empre = $request->define_empre;;
        $concurso->necesidades_cubre = $request->necesidades_cubre;;
        $concurso->deferencia_empre = $request->deferencia_empre;;
        $concurso->propuesta_valor = $request->propuesta_valor;;
        $concurso->modelo_negocio = $request->modelo_negocio;
        $concurso->cant_empleados = $request->cant_empleados;
        $concurso->cant_clientes = $request->cant_clientes;
        $concurso->img_prod = $rutaImg;
        $concurso->mercado = $request->mercado;
        $concurso->save();
        Session::put('inscripcion_concurso_id',$concurso->id);

        return redirect()->action('inscripcionConcursoController@index')->with(['message'=>'Registro Satisfactorio']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inscripcionConcurso  $inscripcionConcurso
     * @return \Illuminate\Http\Response
     */
    public function show(inscripcionConcurso $inscripcionConcurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inscripcionConcurso  $inscripcionConcurso
     * @return \Illuminate\Http\Response
     */
    public function edit(inscripcionConcurso $inscripcionConcurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inscripcionConcurso  $inscripcionConcurso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inscripcionConcurso $inscripcionConcurso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inscripcionConcurso  $inscripcionConcurso
     * @return \Illuminate\Http\Response
     */
    public function destroy(inscripcionConcurso $inscripcionConcurso)
    {
        //
    }
    private function generarRamdom()
    {
        $random = Str::random(4);
        $rif = substr($random, -2);
        $fecha = date('Ymd');
        return 'ins-'.$random.$fecha.$rif.'EPM';
    }
}
