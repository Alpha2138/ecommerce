<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'tbl_product'; // Specify the table name
    protected $primaryKey = 'product_id'; // Specify the primary key name

    protected $fillable = [
        'product_name',        // Product name
        'category_id',        // Foreign key to categories
        'price',              // Product price
        'product_description', // Product description
        'product_image',      // Product image
    ];

    // Define the relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id'); // Adjust the foreign key and local key as needed
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'product_id', 'product_id');
    }
}
