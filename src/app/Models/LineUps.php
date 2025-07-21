<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LineUps extends Model
{
     protected $fillable = [
        'match_id',
        'player_id',
        'lineup_role',
        'minutes_played',
        'goals',
        'assists',
        'card',
    ];

    public function match(): BelongsTo
    {
        return $this->belongsTo(FootballMatch::class, 'match_id');
    }

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }
}
