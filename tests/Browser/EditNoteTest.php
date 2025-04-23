<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnote
     */
    public function testEditNote(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Enterprise Application Development') 
            ->clickLink('Log in') 
            ->type('email', 'user@gmail.com') 
            ->type('password', '123456') 
            ->press('LOG IN') 
            ->assertsee('Dashboard')
            ->clickLink('Notes') 
            ->clickLink('Edit') 
            ->type('title', 'praktikum ppl modul 3') 
            ->type('description', 'praktikum ppl modul 3 unit testing') 
            ->press('UPDATE') 
            ->assertsee('user'); 
        });
    }
}
