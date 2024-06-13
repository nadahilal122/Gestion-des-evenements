<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'ville',
        'photo',
        'date_deput' ,
        'client_id',
        'event_type_id',
        'description',
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function basicTicket()
    {
        return $this->hasOne(basic_ticket::class);
    }
    public function standartticket()
    {
        return $this->hasOne(standart_ticket::class);
    }

    public function vipticket()
    {
        return $this->hasOne(vip_ticket::class);
    }
}
