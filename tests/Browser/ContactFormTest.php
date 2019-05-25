<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ContactFormTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @group contact
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                    ->type('email', 'boylevantz@yahoo.com')
                    ->select('topic','Technical')
                    ->type('message', 'This is message')
                    ->press('Submit')
                    ->assertPathIs('/contact')
                    ->assertSee('Thank you we will contacting you soon');
        });
    }
}
