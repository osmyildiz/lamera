<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Testimonial extends Model
{
    use Notifiable;
    protected $table = 'testimonials';
    public $timestamps = true;
    protected $fillable = [];
}
