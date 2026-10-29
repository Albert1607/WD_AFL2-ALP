<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'booking_code',
        'customer_name',
        'customer_phone',
        'customer_email',
        'vehicle_brand',
        'vehicle_model',
        'vehicle_year',
        'vehicle_plate',
        'service_type',
        'branch',
        'service_date',
        'service_time',
        'is_home_service',
        'address',
        'notes',
        'status',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_home_service' => 'boolean',
            'service_date' => 'date',
        ];
    }

    /**
     * Get the Indonesian status label.
     */
    public function getStatusLabel(): string
    {
        return match ($this->status) {
            'confirmed' => 'Dikonfirmasi',
            'completed' => 'Selesai',
            'cancelled' => 'Dibatalkan',
            default => 'Menunggu Konfirmasi',
        };
    }

    /**
     * Get status CSS badge classes.
     */
    public function getStatusBadgeClass(): string
    {
        return match ($this->status) {
            'confirmed' => 'bg-emerald-100 text-emerald-800 border-emerald-300',
            'completed' => 'bg-blue-100 text-blue-800 border-blue-300',
            'cancelled' => 'bg-rose-100 text-rose-800 border-rose-300',
            default => 'bg-amber-100 text-amber-800 border-amber-300',
        };
    }

    /**
     * Generate pre-filled WhatsApp link for direct confirmation with customer care.
     */
    public function getWhatsAppUrl(): string
    {
        $phone = '6281234567890'; // Official Customer Care WhatsApp
        $message = "Halo AutoDrive Quick Service! Saya ingin konfirmasi booking servis dengan detail:\n\n".
            "• Kode Booking: {$this->booking_code}\n".
            "• Nama: {$this->customer_name}\n".
            "• Layanan: {$this->service_type}\n".
            "• Kendaraan: {$this->vehicle_brand} {$this->vehicle_model} ({$this->vehicle_plate})\n".
            '• Lokasi: '.($this->is_home_service ? "Home Service ({$this->address})" : $this->branch)."\n".
            '• Tanggal & Jam: '.($this->service_date ? $this->service_date->format('d/m/Y') : '-')." pukul {$this->service_time}\n\n".
            'Mohon info konfirmasi ketersediaan mekanik. Terima kasih!';

        return 'https://wa.me/'.$phone.'?text='.rawurlencode($message);
    }
}
