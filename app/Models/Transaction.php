<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id', 'destination_id', 'amount',
    ];

    public function sourceCard()
    {
        return $this->belongsTo(Card::class, 'card_id');
    }

    public function destinationCard()
    {
        return $this->belongsTo(Card::class, 'destination_id');
    }
}
