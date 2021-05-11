<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BanquetImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'banquet_id',
        'img_path'
    ];
    public function banquet()
    {
        return $this->belongsTo(Banquet::class);
    }
}
