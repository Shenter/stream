<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    protected $fillable = ['user_id','product_id'];
    use HasFactory;



    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
//    public function count()
//    {
//        return $this->where(['user_id'=>Auth::user()->id])->count;
//    }

    public static function findByProduct($productId)
    {
        return  self::where(['user_id'=>Auth::user()->id,'product_id'=>$productId])->get() ;
    }

}
