<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogOutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group logout
     */
    public function testLogout(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Enterprise Application Development') 
            ->clickLink('Log in') 
            ->type('email', 'user@gmail.com') 
            ->type('password', '123456') 
            ->press('LOG IN') 
            ->assertsee('Dashboard')
            ->press('user') 
            ->clickLink('Log Out') 
            ->assertSee('Enterprise Application Development'); 
        });
    }
}
