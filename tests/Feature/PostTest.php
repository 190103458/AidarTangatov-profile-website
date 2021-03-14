<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_post_get_id_request()
    {
        $response = $this->get('/post/{id}');

        $response->assertStatus(200);
    }

    public function test_get_unexisted_post()
    {
        $response = $this->get('/post/10000');

        $response->assertStatus(404);
    }

    public function test_post_response()
    {
        $response = $this->get('/post/1');

        $response->assertViewHas('post');
    }
}
