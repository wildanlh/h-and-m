<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'age', 'email', 'phone', 'address', 'city', 'country', 'shirt_size', 'shirt_color', 'shirt_type', 'shirt_pattern', 'price', 'quantity'];
    protected $visible = ['first_name', 'last_name', 'age', 'email', 'phone', 'address', 'city', 'country', 'shirt_size', 'shirt_color', 'shirt_type', 'shirt_pattern', 'price', 'quantity'];
}
