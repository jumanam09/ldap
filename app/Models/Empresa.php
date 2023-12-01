<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $razon_social
 * @property $nit
 * @property $direccion
 * @property $correo
 * @property $representante
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'razon_social' => 'required',
		'nit' => 'required',
		'direccion' => 'required',
		'correo' => 'required',
		'representante' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['razon_social','nit','direccion','correo','representante','telefono'];



}
