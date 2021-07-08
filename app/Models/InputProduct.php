<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class InputProduct extends Model{
    protected $table = 'input_products';
    protected $fillable =[
        'product_id',
        'amount',
    ];
}