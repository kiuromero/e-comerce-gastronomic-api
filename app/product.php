<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
        protected $table = 'products';
        protected  $fillable = array('id_product', 'name', 'id_category');

        public function classByProduct(){
                return $this->belongsTo('App\Category');
        }
}
