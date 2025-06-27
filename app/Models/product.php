<?php

  

namespace App\Models;

  

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use App\Models\Productimage;


class Product extends Model

{

    use HasFactory;

  

    /**

     * The attributes that are mass assignable.

     *	

     * @var array

     */

    protected $fillable = [

        'name', 'detail','approval_status','user_id','price'

    ];
    public function images()
    {
        return $this->hasMany(Productimage::class, 'product_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    

}