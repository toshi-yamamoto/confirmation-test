<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

        protected $fillable = [
        'last_name',
        'first_name',
        'gender',
        'email',
        'tell',
        'address',
        'building',
        'detail',
    ];

    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) 
        {
            $query->where('last_name', 'like', '%' . $keyword . '%');
        }
    }
}
