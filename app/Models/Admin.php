<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable=['fullname','username','email','role_id','password'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    protected $hidden = [
        'password',
    ];
}

