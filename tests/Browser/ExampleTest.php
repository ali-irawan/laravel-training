<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Login');
        });
    }

    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'boylevantz@yahoo.com')
                    ->type('password', '12345678')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->pause(2000)
                    ->logout();
                    
        });
    }

    public function testLoginFails()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->pause(2000)
                    ->type('email', 'boylevantz@yahoo.com')
                    ->type('password', '12345678XXX')
                    ->press('Login')
                    ->assertPathIs('/login')
                    ->pause(1000)
                    ->assertSee('These credentials do not match our records.');
                    
        });
    }
}
