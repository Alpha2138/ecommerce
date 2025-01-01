<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'tbl_cart';
    protected $primaryKey = 'cart_id';
    public $timestamps = false;  // Use added_at as timestamp

    protected $fillable = ['customer_id', 'product_id', 'quantity', 'added_at'];

    // Relationship with Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}
