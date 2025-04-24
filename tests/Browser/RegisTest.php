<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->assertSee('Register')
                    ->clickLink('Register')
                    ->type('email', 'nisa@example.com')
                    ->type('password', 'password')
                    ->type('name', 'nisa')
                    ->type('confirm password', 'password')
                    ->press('Log in')
                    ->screenshot('regis');


        });
    }
}
