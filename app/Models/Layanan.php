<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Layanan extends Model
{
    protected $table = 'layanan';

    /** @var list<string> */
    protected $fillable = [
        'kategori_id',
        'nama_layanan',
        'slug',
        'deskripsi',
        'harga_mulai',
        'estimasi_durasi',
        'gambar',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'harga_mulai' => 'decimal:2',
    ];

    /**
     * A service belongs to one category.
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriLayanan::class, 'kategori_id');
    }

    /**
     * A service has many testimonials.
     */
    public function testimoni(): HasMany
    {
        return $this->hasMany(Testimoni::class, 'layanan_id');
    }

    /**
     * Route model binding key.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Format harga_mulai as Indonesian Rupiah.
     */
    public function getHargaFormattedAttribute(): string
    {
        return 'Rp '.number_format((float) $this->harga_mulai, 0, ',', '.');
    }

    /**
     * Public URL of the service image stored in public/images/layanan.
     */
    public function getGambarUrlAttribute(): string
    {
        $file = $this->gambar ?: 'layanan-default.jpg';

        return asset('images/layanan/'.rawurlencode($file));
    }
}
