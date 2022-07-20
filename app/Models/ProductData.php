<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Shippers extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sku',
        'price',
        'availability',
        'description',
        'rating',
    ];
}