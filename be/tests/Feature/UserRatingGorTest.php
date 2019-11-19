<?php

namespace Tests\Feature;

use App\User;
use App\Gor;
use App\Rating;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserRatingGorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $users     = factory(User::class, 10)->create();
        $userCount = count($users) == 10;
        $this->assertTrue($userCount);

        $gors     = factory(Gor::class, 10)->create();
        $gorCount = count($gors) == 10;
        $this->assertTrue($gorCount);
    
        $ratings     = factory(Rating::class, 10)->create();
        $ratingCount = count($ratings) == 10;
        $this->assertTrue($ratingCount);

    }
}
