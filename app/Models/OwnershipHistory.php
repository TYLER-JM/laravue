<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnershipHistory extends Model
{
    use HasFactory;
    protected $dates = ['start_date', 'end_date'];

    public function owner()
    {
        return $this->belongsTo(\App\Models\Owner::class);
    }

    public function team()
    {
        return $this->belongsTo(\App\Models\Team::class);
    }
}
