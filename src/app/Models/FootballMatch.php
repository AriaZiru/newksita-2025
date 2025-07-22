<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FootballMatch extends Model
{
protected $table = 'football_matches';

    protected $fillable = [
        'opponent',
        'match_date',
        'competition',
        'stadium_name',
        'home_score',
        'away_score',
    ];

    public function lineUps(): HasMany
    {
        return $this->hasMany(LineUp::class, 'match_id');
    }


    public function getFormattedScoreAttribute(): string
    {
        return "Real Madrid {$this->home_score} - {$this->away_score} {$this->opponent}";
    }
}
