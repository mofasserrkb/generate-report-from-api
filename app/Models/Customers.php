<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    use HasFactory;
     protected $table = 'customers';
    protected $fillable = [
       'name','order_no','user_phone','product_code','product_name','purchase_quantity','product_price','created_at','total_price'
    ];
     public $timestamps = false;
}
