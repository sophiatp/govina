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

    public function subCategory() {
        $this->hasMany(\SubCategories::class);
    }
}
