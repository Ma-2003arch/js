<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['user_id', 'article_id', 'program_id', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
}
}