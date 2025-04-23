<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group deletenote
     */
    public function testDeleteNote(): void
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
            ->press('Delete'); 
        });
    }
}
