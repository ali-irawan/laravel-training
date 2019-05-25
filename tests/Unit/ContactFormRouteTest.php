<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactFormRouteTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $before_count = \App\FormContact::count();
        $this->assertEquals( 9, $before_count );

        $response = $this->post('/contact', 
        [
            'email' => 'boylevantz@yahoo.com',
            'topic' => 'Billing',
            'message' => 'testing again',
        ]
        );

        $response->assertStatus(302); // redirected

        $after_count = \App\FormContact::count();   
        $this->assertEquals( 10, $after_count);

        $last_data = \App\FormContact::orderBy('id', 'desc')->first();

        $this->assertEquals('boylevantz@yahoo.com', $last_data->email);
        $this->assertEquals('Billing', $last_data->topic);
        $this->assertEquals('testing again', $last_data->message);
    }
}
