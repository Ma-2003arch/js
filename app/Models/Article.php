<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'tontine_price', 'stock','image_url'];
}
//Article Model
class Articles extends Model
{
    public function tontines()
    {
        return $this->hasMany(Tontine::class);
    }

    public function payments()
    {
        return $this->hasMany(Payments::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
}
}