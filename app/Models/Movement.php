<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id','type','quantity','user_id','note','occurred_at'
    ];

    protected $dates = ['occurred_at'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
