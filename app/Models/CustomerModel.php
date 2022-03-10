<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    
    protected $table = 'customers';

    protected $fillable = [
        'name', 'email', 'phone', 'address'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
