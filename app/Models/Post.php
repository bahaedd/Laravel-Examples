<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function scopeStatus($query)
    // {
    //     return $query->where('status', 1);
    // }

    // dynamic scope
    public function scopeStatus($query, $type)
    {
        return $query->where('status', $type);
    }


}

