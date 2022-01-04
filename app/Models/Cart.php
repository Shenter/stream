<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    protected $fillable = ['user_id','product_id'];
    use HasFactory;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne('App\Models\User');
    }

    /**
     * @param $productId
     * @return mixed
     */
    public static function findByProduct($productId)
    {
        return  self::where(['user_id'=>Auth::user()->id,'product_id'=>$productId])->get() ;
    }

}
