<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'link', 'alt'
    ];

    public $timestamps = false;

    public function products() {
        return $this->belongsTo(Product::class);
    }
}
