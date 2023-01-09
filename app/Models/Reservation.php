<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reservation extends Model
{
    use Notifiable;
    protected $table = 'reservations';
    public $timestamps = true;
    protected $fillable = [];
}
