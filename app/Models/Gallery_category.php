<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Gallery_category extends Model
{
    use Notifiable;
    protected $table = 'gallery_categories';
    public $timestamps = true;
    protected $fillable = [];
}
