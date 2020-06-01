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

    // This line is also used to ignore the mass assignment
//    protected $guarded = [];


    // define the slug as the key name. so, overrides the id
    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function replies(){
        $this->hasMany(Reply::class);
    }

    public function user(){
        $this->belongsTo(User::class);
    }

    public function category(){
        $this->belongsTo(Category::class);
    }

    public function getPathAttribute(){
        return asset("api/question/$this->slug");
    }

}
