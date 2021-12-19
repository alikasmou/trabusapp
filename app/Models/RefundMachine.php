<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class RefundMachine extends Model
{
    use HasFactory;

    public function transactions() : MorphMany{
        return $this->morphMany(Transaction::class, 'transactionable');
    }
}
