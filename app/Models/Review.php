<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'banquet_id',
        'name',
        'review'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id', 'user');
    }
    public function banquet()
    {
        return $this->belongsTo(Banquet::class, 'banquet_id', 'id', 'banquet');
    }
    // public function banquetName($id)
    // {
    //     return Banquet::findOrFail($id)->name;
    // }
}
