<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\User;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @group Login
     */
    public function test_user_can_login_with_correct_credentials(): void
    {
        // Membuat user untuk kebutuhan test
        $user = User::factory()->create([
            'email' => 'nisa@example.com',
            'password' => bcrypt('password'),
        ]);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit(url:'/log in')
                    ->type(field:'email', value:'nisa@example.com')
                    ->type(field: 'password', value: 'password')
                    ->press(button: 'Log in') 
                    ->assertPathIs(path:'/Log in') 
                    ->screenshot('login');

        });
    }
}
