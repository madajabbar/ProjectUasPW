<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','article_id','comment','username'
    ];
    public function article(){
        return $this->belongsTo('App\Models\Article');
    }
}
