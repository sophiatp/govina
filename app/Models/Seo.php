<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Seo extends Model
{
    use Notifiable;

    protected $fillable = [
        'title',
        'keyword',
        'description'
    ];
}
