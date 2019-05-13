<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmailTest extends TestCase
{

	use WithFaker;

    /**
     * A basic test example.
     *
     * @return void
	 * @test
     */
    public function it_sends_an_email()
    {
        $data = [
        	'full_name' => $this->faker->name,
			'email' => $this->faker->email,
			'company_name' => $this->faker->company,
			'experience' => $this->faker->paragraph
		];

        $this->postJson('/api/mail', $data)

			 ->assertStatus(200);
        $this->assertTrue(count(Mail::failures()) === 0);
    }
}
