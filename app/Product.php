<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Relación con categorias
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    /**
     * Precios del producto
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prices() {
        return $this->hasMany(Price::class);
    }

    /**
     * Imágenes del producto
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images() {
        return $this->hasMany(Image::class);
    }
}
