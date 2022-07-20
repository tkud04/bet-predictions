<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plugins extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'value' , 'status'
    ];
    
}
