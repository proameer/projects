<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    protected $fillable = [
    
        'link',
        'logo_id',
    ];

    public function logo()
    {
        return $this->belongsTo('App\Models\Logo','logo_id','id');
    }
}
