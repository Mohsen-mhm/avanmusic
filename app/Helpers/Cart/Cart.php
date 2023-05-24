<?php

namespace App\Helpers\Cart;

use Illuminate\Support\Facades\Facade;

/**
 * @method static put(\App\Models\Song $song)
 * @method static has(\App\Models\Song $song)
 * @method static get()
 * @method static all()
 * @method static update(\App\Models\Song $song, mixed $options)
 * @method static delete($id)
 */
class Cart extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cart';
    }
}
