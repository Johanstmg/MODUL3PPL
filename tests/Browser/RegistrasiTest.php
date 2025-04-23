<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group registrasi
     */
    public function testRegist(): void
    {
        $this->browse(function (Browser $browser){
            $browser->visit('/') 
                    ->assertSee('Register') 
                    ->clickLink('Register') 
                    ->type('name', 'user') 
                    ->type('email', 'user@gmail.com') 
                    ->type('password', '123456') 
                    ->type('password_confirmation', '123456')
                    ->press('REGISTER');
        });
    }
}
