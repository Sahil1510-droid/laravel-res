<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Res;

class Foods extends Model
{
    use HasFactory;
    protected $table = "foods";

    public function res()
    {
        return $this->belongsTo(Res::class, 'restaurants_id');
    }
}
