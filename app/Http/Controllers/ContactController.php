<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Notifications\AdminContactNotification;
use App\Notifications\ContactNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function send()
    {
        $contact = Contact::create(request()->all());
        $contact->save();

        Notification::send($contact, new ContactNotification($contact));

        $admins = User::where('admin', '1')->get();
        Notification::send($admins, new AdminContactNotification($contact));

        return ['message' => 'Your contact was sended'];
    }
}
