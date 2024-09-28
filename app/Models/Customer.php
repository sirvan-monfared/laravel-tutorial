<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;

class Customer extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'last_name', 'email', 'phone', 'card_number', 'biography'];

    public static function filter(?string $keyword = null, ?string $order_by = null): Collection
    {
        if ($keyword) {
            $customers = Customer::where('name', 'LIKE', "%{$keyword}%")
                ->orWhere('last_name', 'LIKE', "%{$keyword}%")
                ->orWhere('email', 'LIKE', "%{$keyword}%")
                ->orWhere('phone', 'LIKE', "%{$keyword}%")
                ->orWhere('card_number', 'LIKE', "%{$keyword}%");
        } else {
            $customers = Customer::query();
        }

        return $customers->orderBy('id', $order_by ?: 'desc')->get();
    }
}
