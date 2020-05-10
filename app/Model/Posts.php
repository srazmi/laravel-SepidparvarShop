<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public $timestamps = false;
    public $table= 'posts';
    protected $fillable = [
        'title','content'
    ];
    
    public function photoes()
    {
        return $this->morphMany("App\Model\Photoes","imageable");
    }

    public function tags()
    {
        return $this->morphtoMany("App\Model\Tags","taggable");
    }

}
