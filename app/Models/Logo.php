<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameClass',
    ];

    public function social()
    {
        return $this->hasMany('App\Models\Social');
    }
}
