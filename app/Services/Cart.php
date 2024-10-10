<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Collection;

class Cart
{
    protected Collection $items;

    public function __construct() {
        $this->items = session('cart', collect([]));
    }

    public function has(int $product_id)
    {
        return $this->items->contains(fn($item) => $item->id === $product_id);
    }

    public function update(int $product_id, int $qty, int $color_id): static
    {
        $this->items = $this->items->map(function($item) use ($product_id, $qty, $color_id) {
            if ($item->id === $product_id) {
                $item->qty += $qty;
                $item->color_id = $color_id;
                return $item;
            }

            return $item;
        });

        $this->sync();

        return $this;
    }

    public function add(Product $product, int $qty, int $color_id): static
    {

        $this->items->push((object) [
           'id' => $product->id,
           'title' => $product->title,
           'image' => $product->image(),
           'price' => $product->price,
           'qty' => $qty,
           'color_id' => $color_id
        ]);

        $this->sync();

        return $this;
    }

    public function items()
    {
        return $this->items;
    }

    public function sync(): void
    {
        session()->put('cart', $this->items);
    }

    public function addOrUpdateProduct(Product $product, int $qty, int $color_id): static
    {
        if ($this->has($product->id)) {
            $this->update($product->id, $qty, $color_id);
        } else {
            $this->add($product, $qty, $color_id);
        }

        return $this;
    }

    public function clear(): void
    {
        session()->forget('cart');
    }

    public function total()
    {
        return $this->items->sum(fn ($item) => $item->qty * $item->price);
    }

    public function remove(int $id): static
    {
        $this->items = $this->items->reject(function($item) use($id) {
            return $item->id === $id;
        });

        $this->sync();

        return $this;
    }

    public function count(): int
    {
        return $this->items->count();
    }
}
