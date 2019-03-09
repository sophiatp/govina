<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	use Notifiable;

	protected $fillable = [
        'status', 'img_url'
    ];
    
}
