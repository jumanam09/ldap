<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 *
 * @property $id
 * @property $fecha
 * @property $tfactura_id
 * @property $cliente_id
 * @property $total
 * @property $descuento
 * @property $iva
 * @property $subtotal
 * @property $saldo
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Tfactura $tfactura
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Factura extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'tfactura_id' => 'required',
		'cliente_id' => 'required',
		'total' => 'required',
		'descuento' => 'required',
		'iva' => 'required',
		'subtotal' => 'required',
		'saldo' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','tfactura_id','cliente_id','total','descuento','iva','subtotal','saldo','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tfactura()
    {
        return $this->hasOne('App\Models\Tfactura', 'id', 'tfactura_id');
    }
    

}
