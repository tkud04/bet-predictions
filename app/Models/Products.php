<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Products extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sku',
        'category_id',
        'subcategory_id',
        'name',
        'qty',
        'status'
    ];
}