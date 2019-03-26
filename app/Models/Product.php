<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;

    protected $fillable = [
        'name',
        'sub_id',
        'price',
        'code',
        'sub_title',
        'description',
        'image',
        'slug'
    ];

    public function subcategory() {
        return $this->belongsTo(SubCategory::class, 'sub_id');
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
