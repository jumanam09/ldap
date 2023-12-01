<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $empresa_id
 * @property $nombre
 * @property $tipo_id
 * @property $ciudad_id
 * @property $depa_id
 * @property $cupo_credito
 * @property $saldo
 * @property $pagos
 * @property $compras
 * @property $created_at
 * @property $updated_at
 *
 * @property Ciudade $ciudade
 * @property Departamento $departamento
 * @property Empresa $empresa
 * @property Factura[] $facturas
 * @property Tcliente $tcliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'empresa_id' => 'required',
		'nombre' => 'required',
		'tipo_id' => 'required',
		'ciudad_id' => 'required',
		'depa_id' => 'required',
		'cupo_credito' => 'required',
		'saldo' => 'required',
		'pagos' => 'required',
		'compras' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['empresa_id','nombre','tipo_id','ciudad_id','depa_id','cupo_credito','saldo','pagos','compras'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ciudade()
    {
        return $this->hasOne('App\Models\Ciudade', 'id', 'ciudad_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'depa_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'id', 'empresa_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tcliente()
    {
        return $this->hasOne('App\Models\Tcliente', 'id', 'tipo_id');
    }
    

}
