<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class slider extends Model
{
    use Notifiable;
    protected $table = 'sliders';
    public $timestamps = true;
    protected $fillable = [];
}
