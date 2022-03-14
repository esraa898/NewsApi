<?php

namespace App\Models;

use App\Models\User;
use App\Models\comment;
use App\Models\category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class post extends Model
{
    use HasFactory;
    protected $filable=['title','date_written','featured_img','content'];
    public function author(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function comments(){
        return $this->hasMany(comment::class,'post_id','id');
    }
    public function category(){
         return $this->belongsTo(category::class,'category_id','id');
    }
}
