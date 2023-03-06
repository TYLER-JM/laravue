<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'teams';

    public function owner()
    {
        return $this->belongsTo(\App\Models\Owner::class);
    }

    public function homeGames()
    {
        return $this->hasMany(\App\Models\Event::class, 'home_team_id', 'api_id');
    }

    public function awayGames()
    {
        return $this->hasMany(\App\Models\Event::class, 'away_team_id', 'api_id');
    }

    public function completedHomeGames()
    {
        return $this->hasManyThrough(\App\Models\Outcome::class, \App\Models\Event::class, 'home_team_id', 'event_id', 'api_id', 'game_pk');
    }

    public function completedAwayGames()
    {
        return $this->hasManyThrough(\App\Models\Outcome::class, \App\Models\Event::class, 'away_team_id', 'event_id', 'api_id', 'game_pk');
    }
}
