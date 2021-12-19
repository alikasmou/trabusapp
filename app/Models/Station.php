<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Station extends Model
{
    use HasFactory;

    public function stationable() : MorphTo{
        return $this->morphTo();
    }

    public function transactions() : HasMany{
        return $this->hasMany(Transaction::class,'start_station_id');
    }
}
