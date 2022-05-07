<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
	
    protected $fillable=['title','category_id','admin_id','thumbnail','content','image','views'];

    public function categorys()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }
    public function admins()
    {
        return $this->belongsTo(Admin::class,'admin_id');
    }

    // public function posts()
    // {
    //     return $this->belongsTo(Post::class,'post')
    // }
}
