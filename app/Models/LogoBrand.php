<?php

namespace App\Models;

use Database\Factories\LogoBrandFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogoBrand extends Model
{
    /** @use HasFactory<LogoBrandFactory> */
    use HasFactory;

    protected $fillable = ['nama_brand', 'logo', 'jenis'];

    /**
     * Public URL of the logo image stored in public/images/logo-brand.
     */
    public function getLogoUrlAttribute(): string
    {
        return asset('images/logo-brand/'.rawurlencode($this->logo));
    }
}
