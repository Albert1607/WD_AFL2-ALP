<?php

namespace Tests\Feature;

use App\Models\LogoBrand;
use Database\Seeders\LogoBrandSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LogoBrandTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_shows_brand_logos_from_database(): void
    {
        $brand = LogoBrand::factory()->create([
            'nama_brand' => 'Merek Uji',
            'logo' => 'toyota.png',
            'urutan' => 1,
        ]);

        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('alt="Logo Merek Uji"', false);
        $response->assertSee($brand->logo_url, false);
    }

    public function test_seeder_creates_all_logo_files_that_exist(): void
    {
        $this->seed(LogoBrandSeeder::class);

        $this->assertSame(10, LogoBrand::count());

        LogoBrand::all()->each(function (LogoBrand $brand): void {
            $this->assertFileExists(public_path('images/logo-brand/'.$brand->logo));
        });
    }
}
