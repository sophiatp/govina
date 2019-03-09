<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProductImg extends Model
{
    use Notifiable;

    protected $fillable = [
        'img_url'
    ];
}
