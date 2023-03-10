<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Gallery extends Model
{
    use Notifiable;
    protected $table = 'galleries';
    public $timestamps = true;
    protected $fillable = [];
}
