<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageUser extends Model
{
    protected $table = 'chats';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'cell_phone', 'email', 'message'
    ];
}
