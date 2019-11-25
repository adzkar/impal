<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EndpointTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $res = $this->get('/api/users');
        $res->assertStatus(200);

        $res = $this->get('/api/ratings');
        $res->assertStatus(200);

        $res = $this->get('/api/gors');
        $res->assertStatus(200);
    }

}
