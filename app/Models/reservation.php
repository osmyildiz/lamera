<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class reservation extends Model
{
    use Notifiable;
    protected $table = 'reservations';
    public $timestamps = true;
    protected $fillable = [];
}
