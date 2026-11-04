<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimoni extends Model
{
    protected $table = 'testimoni';

    /** @var list<string> */
    protected $fillable = [
        'layanan_id',
        'nama_pelanggan',
        'jenis_kendaraan',
        'rating',
        'komentar',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'rating' => 'integer',
    ];

    /**
     * A testimonial belongs to one service.
     */
    public function layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class, 'layanan_id');
    }
}
