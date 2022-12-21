<?php

namespace Tests\Feature;

use App\Models\Tag;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    public function test_empty_tags_home_page()
    {
        $this
            ->get('/')
            ->assertStatus(200)
            ->assertSee('There is no tags');
    }

    public function test_tags_home_page_with_data()
    {
        $tag = Tag::factory()->create();

        $this->assertNotEmpty($tag->name);

        $response = $this
            ->get('/')
            ->assertStatus(200)
            ->assertSee($tag->name)
            ->assertDontSee('There is no tags');
    }
}
