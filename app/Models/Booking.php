<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Booking extends Model
{
    use Notifiable;
    protected $table = 'bookings';
    public $timestamps = true;
    protected $fillable = [];
}
