<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events';

    protected $dates = ['date'];

    public function homeTeam()
    {
        return $this->belongsTo(\App\Models\Team::class, 'home_team_id', 'api_id' );
    }

    public function awayTeam()
    {
        return $this->belongsTo(\App\Models\Team::class, 'away_team_id', 'api_id' );
    }

    public function gameState()
    {
        return $this->belongsTo(\App\Models\GameState::class);
    }

    public function outcome()
    {
        return $this->hasOne(\App\Models\Outcome::class, 'event_id', 'game_pk');
    }

}
