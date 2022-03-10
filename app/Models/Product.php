<?php

namespace App\Models;

use App\Models\Picture;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
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

    protected function price(): Attribute
    {
      return Attribute::make(
        get: fn ($value) => $value / 100
      );
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
