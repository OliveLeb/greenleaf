<?php

namespace App\Models;

use App\Models\Picture;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'category_code'
    ];

    public $timestamps = false;

    public function products() {
        return $this->belongsToMany(Product::class);
    }

    public function picture() {
        return $this->hasOne(Picture::class);
    }
}
