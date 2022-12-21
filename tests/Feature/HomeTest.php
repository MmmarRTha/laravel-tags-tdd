<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

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
}
