<?php

namespace Tests\Feature;

use App\Contact;
use App\Notifications\ContactNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @test
     */
    public function if_contact_notification_is_sended()
    {
        Notification::fake();

        $this->post('api/contact', [
            'first_name' => 'Juan',
            'last_name' => 'Palencia',
            'email' => 'juanchopalen@gmail.com',
            'phone' => '+54 414 9900552',
            'message' => 'Test message',
        ])->assertSuccessful();

        $this->assertDatabaseHas('contacts', [
            'first_name' => 'Juan',
            'last_name' => 'Palencia',
            'email' => 'juanchopalen@gmail.com',
            'phone' => '+54 414 9900552',
            'message' => 'Test message',
        ]);
    }
}
