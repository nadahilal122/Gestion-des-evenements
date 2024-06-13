<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Client extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $fillable = ['username', 'location', 'email', 'number', 'password', 'photo'];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
    
}