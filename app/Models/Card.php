<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Card extends Model
{
    use HasFactory;
    protected $appends = [
        'balance'
    ];
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function CardType() : BelongsTo{
        return $this->belongsTo(CardType::class);
    }

    public function transactions() : HasMany {
        return $this->hasMany(Transaction::class,'card_id');
    }

    public function getBalanceAttribute(){
        $charges = $this->transactions()->where('transactionable_type',ChargeMachine::class)->sum('amount');
        $passes = $this->transactions()->where('transactionable_type',PassingMachine::class)->sum('amount');
        $refunds = $this->transactions()->where('transactionable_type',RefundMachine::class)->sum('amount');
        return round(($charges+$refunds)-$passes,2);
    }
}
