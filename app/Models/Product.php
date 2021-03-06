<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Product extends Eloquent
{
    use HasFactory;
    protected $fillable =['name','slug','description','short_description','price_cost','price_sale' , 'quantity','status','color','size','category_id'];
}
