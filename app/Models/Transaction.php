<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Transaction extends Model
{
    use HasFactory;

    public function transactionable() : MorphTo{
        return $this->morphTo();
    }

    public function station() : BelongsTo{
        return $this->belongsTo(Station::class,'start_station_id');
    }
}
