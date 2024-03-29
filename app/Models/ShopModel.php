<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopModel extends Model
{
    use HasFactory;

    protected $table = 'shop';

    protected $fillable = [
        'name', 'description', 'email', 'phone', 'address'
    ];
}
