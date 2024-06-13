<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class standart_ticket extends Model
{
    use HasFactory;
    protected $fillable = ['price', 'quantity', 'event_id'];
}
