<?php
use App\Models\About;
use App\Models\Social;
use App\Models\Categories;
use App\Models\Post;

function about(){
    return About::latest()->get();
}

function socialMedia(){
    return Social::get();
}

function category(){
    return Categories::get();  
}

function newsTicker(){
    return Post::get();
}

