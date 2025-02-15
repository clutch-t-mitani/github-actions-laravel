<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_ユーザー一覧画面が表示できる()
    {
        // Arrange（準備）
        $user = User::factory()->create(['name' => '織田信長']);

        // Act（実行）
        $response = $this->get('users');

        // Assert（検証）
        $response
            ->assertOk()
            ->assertSee('織田信長');
    }
}
