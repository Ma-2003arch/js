<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'article_id', 'tontine_id', 'amount', 'payment_method', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function tontine()
    {
        return $this->belongsTo(Tontine::class);}
}
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function participants()
    {
        return $this->hasMany(Participants::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
}
}