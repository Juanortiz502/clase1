<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    protected $fillable =[
        'code',
        'description',
        'min',
        'max'
    ];
    public function getAmount(){
        echo InputProduct::where('product_id',$this->id)->sum('amount');
    }
}