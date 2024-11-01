<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class NewestScope implements Scope
{

    public function apply(Builder $builder, Model $model): void
    {
        $builder->where('created_at', '>', now()->subMonth()->format('Y-m-d H:i:s'));
    }
}
