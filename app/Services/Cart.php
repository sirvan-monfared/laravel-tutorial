<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Collection;

class Cart
{
    protected Collection $cart;

    public function __construct() {
        $this->cart = session('cart', collect([]));
    }

    public function has(int $product_id)
    {
        return $this->cart->contains(fn($item) => $item->id === $product_id);
    }

    public function update(int $product_id, int $qty, int $color_id): static
    {
        $this->cart = $this->cart->map(function($item) use ($product_id, $qty, $color_id) {
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
        $this->cart->push((object) [
           'id' => $product->id,
           'title' => $product->title,
           'image' => $product->image(),
           'qty' => $qty,
           'color_id' => $color_id
        ]);

        $this->sync();

        return $this;
    }

    public function sync(): void
    {
        session()->put('cart', $this->cart);
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
}
