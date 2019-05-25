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
        $response = $this->post('/contact', 
        [
            'email' => 'boylevantz@gmail.com',
            'topic' => 'Technical',
            'message' => 'testing testing',
        ]
        );

        $response->assertStatus(302); // redirected
    }
}
