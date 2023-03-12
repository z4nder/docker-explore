<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function testShowPosts(): void
    {
        $user = User::factory()->count(5)->hasPosts(2)->create();

        $this->assertDataBaseCount('users', 5);
    }
}
