<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    protected $fillable = [
        'body', 'question_id', 'user_id'
    ];

    public function question(){
        $this->belongsTo(Question::class);
    }

    public function user(){
        $this->belongsTo(User::class);
    }

    public function likes(){
        $this->hasMany(Like::class);
    }

}
