<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inscripcionConcurso extends Model
{
    protected $table = 'inscripcion_concurso';

	protected $fillable = [

           'cod_inscripcion',
           'name',
           'last_name',
           'email',
           'cedula',
           'tlf',
           'entrepreneurship_economicactivity_id',
           'nombre_empre',
           'sobre_equipo',
           'define_empre',
           'necesidades_cubre',
           'deferencia_empre',
           'propuesta_valor',
           'modelo_negocio',
           'cant_empleados',
           'cant_clientes',
           'img_prod',
           'mercado',
           'bactivo',
    ];
    
    protected $date =['created_at','updated_at'];

    public function entrepreneurshipEconomicactivity() {

        return $this->hasOne('App\Models\entrepreneurshipEconomicactivity','id','entrepreneurship_economicactivity_id');

    }
}
