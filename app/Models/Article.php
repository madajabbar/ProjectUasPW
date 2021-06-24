<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function tags(){
        return $this->hasMany('App\Models\Tag');
    }
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
    protected $table = 'articles';
    protected $fillable = ['id', 'title', 'content'];
}
