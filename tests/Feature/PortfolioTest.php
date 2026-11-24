<?php

namespace Tests\Feature;

use Database\Seeders\ProjectSeeder;
use Database\Seeders\SkillSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the portfolio page loads and contains all essential elements.
     */
    public function test_portfolio_page_loads_successfully_with_data(): void
    {
        $this->seed([ProjectSeeder::class, SkillSeeder::class]);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Reyvaldi');
        $response->assertSee('Tri Hanggara Putra');
        $response->assertSee('valdi.png');
        $response->assertSee('Cover_Game_WeGotThisBro.png');
        $response->assertSee('We Got This Bro!');
        $response->assertSee('PaperBol!');
        $response->assertSee('Chaos Conductor');
        $response->assertSee('Headless Mikey');
        $response->assertSee('CookStack');
        $response->assertSee('SMAN 02 Jember');
        $response->assertSee('Natural Sciences & Mathematics', false);
        $response->assertSee('2021 - 2024');
        $response->assertSee('Electronic Engineering Polytechnic Institute of Surabaya');
        $response->assertSee('Game Technology');
        $response->assertSee('2024 - Now');
        $response->assertSee('3.63');
        $response->assertSee('mailto:vlaix24@gmail.com');
        $response->assertSee('https://wa.me/6289676682773');
        $response->assertSee('https://github.com/vlaix');
        $response->assertSee('https://vlaixx.itch.io/');

        // Assert no tacky AI emojis
        $response->assertDontSee('🚀');
        $response->assertDontSee('🎮');
        $response->assertDontSee('💬');
    }

    /**
     * Test that project detail page loads with comprehensive content.
     */
    public function test_project_detail_page_loads_successfully(): void
    {
        $this->seed([ProjectSeeder::class, SkillSeeder::class]);

        $response = $this->get(route('projects.show', 'we-got-this-bro'));

        $response->assertStatus(200);
        $response->assertSee('We Got This Bro!');
        $response->assertSee('Core Gameplay &amp; Mechanics Programmer', false);
        $response->assertSee('https://corneliuz.itch.io/we-got-this-bro');
        $response->assertSee('https://github.com/vlaix/WPG-4-');
        $response->assertSee('The Archer');
        $response->assertSee('The Builder');
        $response->assertSee('Screenshot 2026-11-23 181535.png');
    }

    /**
     * Test that CV preview endpoint serves the PDF file.
     */
    public function test_cv_preview_loads_successfully(): void
    {
        $response = $this->get(route('cv.preview'));

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/pdf');
    }
}
