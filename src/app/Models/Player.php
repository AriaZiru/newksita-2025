<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name',
        'position',
        'nationality',
        'birth_date',
        'jersey_number',
        'status',
        'team_role',
    ];

    // Relasi ke line_ups
    public function lineUps(): HasMany
    {
        return $this->hasMany(LineUp::class);
    }
}
