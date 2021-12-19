<?php

namespace App\Interfaces;

interface TransactionInterface{
    public function createTransaction($user_id, $card_id, $type, $start_date, $end_date);
}

