<?php

namespace pruebaLrv51;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $table = 'Post';
    protected $fillable = ['title',
            'author_id' ,
            'description',
            'status'];
}
