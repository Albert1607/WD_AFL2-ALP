<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriLayanan extends Model
{
    protected $fillable = ['nama_kategori', 'slug', 'deskripsi'];

    protected $table = 'kategori_layanan';

    /**
     * A category has many services.
     */
    public function layanan(): HasMany
    {
        return $this->hasMany(Layanan::class, 'kategori_id');
    }

    /**
     * Route model binding key.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
