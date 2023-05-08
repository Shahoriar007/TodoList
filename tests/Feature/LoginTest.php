<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_login_view_load()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_login_with_email_and_password(){

        // Create User
        $user = User::factory()->create();

        // Login User
        $this->post('login',[
            'email' => $user->email,
            'password' => 'password'
        ]);

        $this->assertAuthenticated();
    }
}
