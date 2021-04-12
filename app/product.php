<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
        protected $table = 'product';
        protected  $fillable = array('id_product', 'name', 'id_category');

        public function classByProduct(){
                return $this->belongsTo('App\Category');
        }
}
