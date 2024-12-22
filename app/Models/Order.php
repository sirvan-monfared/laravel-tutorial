<?php

namespace App\Models;

use App\Enums\OrderStatus;
use App\Models\Scopes\AdActiveScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $fillable = ['ad_id', 'user_id', 'amount', 'amount', 'transaction_id', 'info', 'description', 'reference_id', 'gateway'];


    protected function casts(): array
    {
        return [
            'status' => OrderStatus::class,
            'info' => 'json'
        ];
    }

    public function ad(): BelongsTo
    {
        return $this->belongsTo(Ad::class)->withoutGlobalScopes([AdActiveScope::class]);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withoutGlobalScopes([AdActiveScope::class]);
    }

    public function isPaid(): bool
    {
        return $this->status === OrderStatus::PAID;
    }
}
