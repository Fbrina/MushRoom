<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['product_name', 'category', 'price', 'stock', 'description', 'file_path'];


}
