<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionPayment extends Model
{
    protected $table = 'users_payments';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'x_ref_payco',
        'x_id_factura',
        'x_id_invoice',
        'x_description',
        'x_amount',
        'x_currency_code',
        'x_bank_name',
        'x_respuesta',
        'x_approval_code',
        'x_transaction_id',
        'x_fecha_transaccion',
        'x_transaction_date',
        'x_cod_respuesta',
        'x_cod_transaction_state',
        'x_transaction_state',
        'x_signature',                              
        'x_extra1',
        'x_extra2'
    ];
}
