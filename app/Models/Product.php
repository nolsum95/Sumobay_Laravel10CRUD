<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $table = 'products';

    //Para maka delete ug item e add ni nga code >> protected $primaryKey = 'product_id';


    protected $fillable = [
        'name',
        'price',
        'description'
    ];

}
