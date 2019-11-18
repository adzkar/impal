<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDatabase()
    {
        $users     = factory(User::class, 10)->create();
        $userCount = count($users) == 10;

        $this->assertTrue($userCount);
    }
}
