<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = [
        'title',
        'body',
        'slug',
        'category_id',
        'user_id'
    ];

    public function replies(){
        $this->hasMany(Reply::class);
    }

    public function user(){
        $this->belongsTo(User::class);
    }

    public function category(){
        $this->belongsTo(Category::class);
    }

}
