<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BanquetServices extends Model
{
    use HasFactory;

    protected $table = 'banquet_services';
    protected $primary_key = 'id';


    public function banquet()
    {
        return $this->belongsTo(Banquet::class);
    }
}
