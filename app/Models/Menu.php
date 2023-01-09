<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Menu extends Model
{
    use Notifiable;
    protected $table = 'menus';
    public $timestamps = true;
    protected $fillable = [];
}
