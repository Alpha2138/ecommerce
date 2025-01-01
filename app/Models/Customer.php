<?php

// app/Models/Customer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'tbl_customer'; // Specify the table name

    protected $primaryKey = 'customer_id'; // Specify the primary key

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
    ];
}
