<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['ad_id', 'amount', 'amount', 'transaction_id', 'info', 'description', 'reference_id', 'gateway'];


    protected function casts(): array
    {
        return [
            'status' => OrderStatus::class,
            'info' => 'json'
        ];
    }
}
