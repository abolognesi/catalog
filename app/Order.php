<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Relación con la tabla usuario
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Lista de productos en el pedido con sus cantidades y precios
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products() {
        return $this->hasMany(OrderProduct::class);
    }

}
