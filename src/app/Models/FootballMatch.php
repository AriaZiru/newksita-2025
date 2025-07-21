<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FootballMatch extends Model
{
    protected $table = 'football_matches';

    protected $fillable = [
        'opponent',
        'match_date',
        'score',
        'competition',
        'stadium_name',
    ];

    public function lineUps(): HasMany
    {
        return $this->hasMany(LineUp::class, 'match_id');
    }
}
