<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Modules\Todolist\Models\Alllist;

class AlllistControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example()
    {
        // Create user
        $user = User::factory()->create();

        // Login User
        $response = $this->post('login',[
            'email' => $user->email,
            'password' => 'password'
        ]);

        $this->assertAuthenticated();

        // create a list
        $response = $this->from(route('create_lists'))
        ->post(route('create_lists'),[
            'name' => 'testname',
        ]);

        //check redirect 
        $response->assertStatus(302);
        $response->assertRedirect(route('all_lists'));

        // check user logged in or not, loggedin usser posted or not
        $list = Alllist::first();
        $this->assertEquals($list->user_id, $user->id);
        $this->assertEquals($list->name, 'testname');
        
    }

    public function test_a_logged_in_user_can_update_post()
    {
        // Create user
        $user = User::factory()->create();

        // Login User
        $response = $this->post('login',[
            'email' => $user->email,
            'password' => 'password'
        ]);

        $this->assertAuthenticated();

        // create a list
        $response = $this->from(route('create_lists'))
        ->post(route('create_lists'),[
            'name' => 'testname',
        ]);

        // update list name

    }
}
