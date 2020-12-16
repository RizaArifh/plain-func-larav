<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table   = 'comments';


    // protected $fillable=['name','email','phone','salary','department'];
    protected $fillable=['comment'];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
