<?php

namespace Tests\Feature;

use Tests\TestCase;

class CompanyProfileTest extends TestCase
{
    public function test_homepage_renders_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('AutoDrive');
        $response->assertSee('Quick Service');
        $response->assertSee('Solusi Servis Cepat');
        $response->assertSee('Ganti Aki Mobil');
        $response->assertSee('Tabel Rekomendasi Tipe Aki');
    }

    public function test_services_index_and_detail_pages_load(): void
    {
        $indexResponse = $this->get('/layanan');
        $indexResponse->assertStatus(200);
        $indexResponse->assertSee('Layanan Quick Service');

        $showResponse = $this->get('/layanan/ganti-aki');
        $showResponse->assertStatus(200);
        $showResponse->assertSee('Ganti Aki Mobil & Battery Care');
        $showResponse->assertSee('GS Astra');
    }

    public function test_promos_page_loads(): void
    {
        $response = $this->get('/promo');

        $response->assertStatus(200);
        $response->assertSee('Katalog Promo');
        $response->assertSee('Promo Tukar Tambah Aki');
    }

    public function test_outlets_page_loads_and_filters_by_city(): void
    {
        $response = $this->get('/lokasi');
        $response->assertStatus(200);
        $response->assertSee('Direktori Lokasi Bengkel');
        $response->assertSee('AutoDrive Fatmawati');

        // Test filtering by city tab
        $filterResponse = $this->get('/lokasi?city='.urlencode('Jakarta Selatan'));
        $filterResponse->assertStatus(200);
        $filterResponse->assertSee('Fatmawati');
    }

    public function test_about_page_loads(): void
    {
        $response = $this->get('/tentang-kami');

        $response->assertStatus(200);
        $response->assertSee('Pelopor Konsep Quick Service');
        $response->assertSee('5 Pilar Standar Kualitas');
    }

    public function test_tips_index_and_show_page(): void
    {
        $response = $this->get('/tips');
        $response->assertStatus(200);
        $response->assertSee('Tips & Panduan Perawatan Mobil');

        $showResponse = $this->get('/tips/5-tanda-aki-mobil-mulai-lemah');
        $showResponse->assertStatus(200);
        $showResponse->assertSee('5 Tanda Aki Mobil Mulai Lemah');
    }

    public function test_contact_page_loads_with_read_only_emergency_hotline(): void
    {
        $contactResponse = $this->get('/kontak');
        $contactResponse->assertStatus(200);
        $contactResponse->assertSee('HOTLINE BEBAS PULSA 24 JAM');
        $contactResponse->assertSee('1500-015');
        $contactResponse->assertSee('customercare@autodrive.co.id');
    }

    public function test_application_is_pure_read_only_with_no_form_write_routes(): void
    {
        $bookingPost = $this->post('/booking', []);
        $this->assertTrue(in_array($bookingPost->status(), [404, 405]));

        $contactPost = $this->post('/kontak', []);
        $this->assertTrue(in_array($contactPost->status(), [404, 405]));
    }
}
