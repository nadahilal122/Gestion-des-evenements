<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basic_ticket extends Model
{
    use HasFactory;
    protected $fillable = ['price', 'quantity', 'event_id'];
    public function event()
    {
        return $this->belongsTo(event::class);
    }
}
