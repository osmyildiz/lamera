<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class contact extends Model
{
    use Notifiable;
    protected $table = 'contacts';
    public $timestamps = true;
    protected $fillable = [];
}
