<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactConfirmationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Simpan ke database
        $contact = Contact::create($validated);

        // Kirim email konfirmasi ke client
        Mail::to($contact->email)
            ->send(new ContactConfirmationMail($contact));

        return redirect()->back()->with('success', 'Thank you. Your message has been sent.');
    }
}

