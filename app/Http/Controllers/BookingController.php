<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Services\MechanicDataService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    /**
     * Show the service booking form.
     */
    public function create(Request $request): View
    {
        $services = MechanicDataService::getServices();
        $outlets = MechanicDataService::getOutlets();
        $cars = MechanicDataService::getCarDatabase();

        $selectedService = $request->query('service', '');
        $selectedBrand = $request->query('brand', '');
        $selectedModel = $request->query('model', '');
        $selectedBranch = $request->query('branch', '');
        $isHome = $request->boolean('home');

        return view('booking.create', compact(
            'services',
            'outlets',
            'cars',
            'selectedService',
            'selectedBrand',
            'selectedModel',
            'selectedBranch',
            'isHome'
        ));
    }

    /**
     * Store a new service booking.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'customer_name' => ['required', 'string', 'max:255'],
            'customer_phone' => ['required', 'string', 'max:30'],
            'customer_email' => ['nullable', 'email', 'max:255'],
            'vehicle_brand' => ['required', 'string', 'max:100'],
            'vehicle_model' => ['required', 'string', 'max:100'],
            'vehicle_year' => ['nullable', 'string', 'max:10'],
            'vehicle_plate' => ['required', 'string', 'max:20'],
            'service_type' => ['required', 'string', 'max:100'],
            'branch' => ['required', 'string', 'max:150'],
            'service_date' => ['required', 'date', 'after_or_equal:today'],
            'service_time' => ['required', 'string', 'max:20'],
            'is_home_service' => ['nullable', 'boolean'],
            'address' => ['required_if:is_home_service,1', 'nullable', 'string', 'max:500'],
            'notes' => ['nullable', 'string', 'max:1000'],
        ]);

        $bookingCode = 'AD-'.now()->format('Ymd').'-'.strtoupper(Str::random(5));

        $booking = Booking::create([
            'booking_code' => $bookingCode,
            'customer_name' => $validated['customer_name'],
            'customer_phone' => $validated['customer_phone'],
            'customer_email' => $validated['customer_email'] ?? null,
            'vehicle_brand' => $validated['vehicle_brand'],
            'vehicle_model' => $validated['vehicle_model'],
            'vehicle_year' => $validated['vehicle_year'] ?? null,
            'vehicle_plate' => strtoupper($validated['vehicle_plate']),
            'service_type' => $validated['service_type'],
            'branch' => $validated['branch'],
            'service_date' => $validated['service_date'],
            'service_time' => $validated['service_time'],
            'is_home_service' => (bool) ($request->input('is_home_service', 0)),
            'address' => $validated['address'] ?? null,
            'notes' => $validated['notes'] ?? null,
            'status' => 'pending',
        ]);

        return redirect()->route('booking.success', ['code' => $booking->booking_code])
            ->with('status', 'Jadwal servis Anda berhasil terdaftar!');
    }

    /**
     * Show booking success voucher/card.
     */
    public function showSuccess(string $code): View
    {
        $booking = Booking::where('booking_code', $code)->firstOrFail();

        return view('booking.success', compact('booking'));
    }

    /**
     * Check status of a booking.
     */
    public function status(Request $request): View
    {
        $code = trim((string) $request->query('code', ''));
        $booking = null;
        $searched = false;

        if ($code !== '') {
            $searched = true;
            $booking = Booking::where('booking_code', strtoupper($code))->first();
        }

        return view('booking.status', compact('booking', 'code', 'searched'));
    }
}
