<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class menu extends Model
{
    use Notifiable;
    protected $table = 'menus';
    public $timestamps = true;
    protected $fillable = [];
}
