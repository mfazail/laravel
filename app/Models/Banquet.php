<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banquet extends Model
{
    use HasFactory;


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
}
