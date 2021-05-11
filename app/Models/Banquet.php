<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banquet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'min_cap',
        'max_cap',
        'place',
        'non_veg',
        'banquet_type',
        'address'
    ];

    public function banquetService()
    {
        return $this->hasMany(BanquetServices::class);
    }

    public function booking()
    {
        return $this->hasMany(BanquetBook::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function images()
    {
        return $this->hasMany(BanquetImages::class);
    }
}
