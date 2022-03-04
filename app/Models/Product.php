<?php

namespace App\Models;

use App\Models\Picture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'details',
        'description',
        'product_code',
        'price',
        'quantity',
    ];

    public $timestamps = false;

    public function pictures() {
        return $this->hasMany(Picture::class);
    }
}
