<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderValidate extends Model
{
    use HasFactory;
    public $fillable = ['name', 'dateOn', 'dateOut', 'email', 'price', 'product'];

    protected $table = 'order_validates';
}
