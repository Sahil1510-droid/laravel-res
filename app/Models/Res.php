<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Foods;

class Res extends Model
{
    use HasFactory;
    protected $table = "restaurants";

    public function foods()
    {
        return $this->hasMany(Foods::class, 'id');
    }
}
