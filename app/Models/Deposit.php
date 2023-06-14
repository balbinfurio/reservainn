<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'reservation_id');
    }
}
