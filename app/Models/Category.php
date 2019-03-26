<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Notifiable;

    protected $fillable = [
        'name'
    ];

    public function subCategories() {
        return $this->hasMany(SubCategories::class, 'sub_id');
    }

    public function products() {
        return $this->hasMany(Product::class, 'sub_id');
    }
}
