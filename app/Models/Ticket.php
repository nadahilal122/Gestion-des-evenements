<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['event_id', 'price_basic','price_standart','price_vip','quantity_basic','quantity_standart','quantity_vip'];

}