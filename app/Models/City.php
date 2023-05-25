<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function tours()
    {
        return $this->hasMany(Tour::class, 'city_id', 'id');
    }
}
