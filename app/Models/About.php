<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;


class About extends Model
{
    use Notifiable;
    protected $table = 'abouts';
    public $timestamps = true;
    protected $fillable = [];
}
