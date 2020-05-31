<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class MyCommentModel extends Model
{
    protected $table = 'comments';
    protected $fillable = ['subject', 'content', 'author', 'date', 'user_id'];
}
