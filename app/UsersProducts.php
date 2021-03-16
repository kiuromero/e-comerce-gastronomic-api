<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersProducts extends Model
{
    protected $table = 'users_products';
        protected  $fillable = array ('name','id_product','id_user','email','tipo_pago');
}
