<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CompanyProfileTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_homepage_renders_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Kardi Putra Motor');
        $response->assertSee('Servis Mobil Cepat');
        $response->assertSee('Mekanik Berpengalaman');
    }

    public function test_services_index_loads_with_categories(): void
    {
        $response = $this->get('/layanan');

        $response->assertStatus(200);
        $response->assertSee('Layanan Servis Mobil');
        $response->assertSee('Perawatan Rutin');
        $response->assertSee('Ganti Oli Mesin');
    }

    public function test_services_index_filters_by_category(): void
    {
        $response = $this->get('/layanan?kategori=perawatan-rutin');

        $response->assertStatus(200);
        $response->assertSee('Perawatan Rutin');
        $response->assertSee('Ganti Oli Mesin');
    }

    public function test_service_detail_page_loads(): void
    {
        $response = $this->get('/layanan/ganti-oli-mesin');

        $response->assertStatus(200);
        $response->assertSee('Ganti Oli Mesin');
        $response->assertSee('Estimasi:');
        $response->assertSee('Pesan via WhatsApp');
    }

    public function test_testimonials_page_loads(): void
    {
        $response = $this->get('/testimoni');

        $response->assertStatus(200);
        $response->assertSee('Kata Mereka tentang');
        $response->assertSee('KPM');
        $response->assertSee('dari 5 bintang');
    }

    public function test_contact_page_loads(): void
    {
        $response = $this->get('/kontak');

        $response->assertStatus(200);
        $response->assertSee('Hubungi Kami');
        $response->assertSee('Mulai Chat WhatsApp');
        $response->assertSee('Informasi Bengkel');
    }

    public function test_nonexistent_route_returns_404(): void
    {
        $response = $this->get('/halaman-tidak-ada');

        $response->assertStatus(404);
        $response->assertSee('Halaman Tidak Ditemukan');
    }

    public function test_application_is_strictly_read_only(): void
    {
        $postHome = $this->post('/', []);
        $this->assertTrue(in_array($postHome->status(), [404, 405]));

        $postKontak = $this->post('/kontak', []);
        $this->assertTrue(in_array($postKontak->status(), [404, 405]));

        $postLayanan = $this->post('/layanan', []);
        $this->assertTrue(in_array($postLayanan->status(), [404, 405]));
    }
}
