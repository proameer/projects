<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameCategory',
    ];

    public function post()
    {
        return $this->hasMany('App\Models\Post');
    }
}
