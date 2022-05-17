<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 'name', 'category_id', 'hours', 'amount', 'address', 'cost'
    ];

    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
