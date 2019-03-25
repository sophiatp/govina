<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SubCategory extends Model
{
    use Notifiable;

    protected $fillable = [
        'category_id', 'name', 'slug'
    ];

    public function categories() {
        return $this->hasMany(Product::class);
    }
}
