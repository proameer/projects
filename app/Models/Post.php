<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'image',
        'category_id',
    ];

    public function category()
    {
        // return $this->belongsTo('Model', 'foreign_key', 'owner_key'); 
        return $this->belongsTo('App\Models\Categories','category_id','id');
    }
}