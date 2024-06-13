<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable =[
        'comment',
        'likes' ,
        'rating',
        'event_id',
        'client_id' ,
    ];

    public function clients():HasMany
    {
        return $this->hasMany(Client::class);
    }
    public function feedbacks()
{
    return $this->hasMany(Feedback::class);
}
public function client()
{
    return $this->belongsTo(Client::class);
}

}
