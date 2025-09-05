<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact.index');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'fullname' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'message' => ['required', 'string', 'min:5'],
        ], [
            'fullname.required' => 'Le nom et prénom est obligatoire.',
            'fullname.min' => 'Le nom et prénom doit contenir au moins :min caractères.',
            'email.required' => "L'adresse email est obligatoire.",
            'email.email' => "L'adresse email n'est pas valide.",
            'message.required' => 'Le message est obligatoire.',
            'message.min' => 'Le message doit contenir au moins :min caractères.',
        ]);

        // You can send an email, persist to DB, or forward to a service here.
        // For now, we just redirect back with a success message.

        return redirect()->route('contact')->with('success', 'Votre message a bien été envoyé. Nous vous contacterons prochainement.');
    }
} 