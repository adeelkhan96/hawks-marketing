<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'phone'   => 'nullable|string|max:30',
            'email'   => 'required|email|max:150',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string|max:3000',
        ]);

        ContactSubmission::create($validated);

        return redirect()->route('contact')
            ->with('success', 'Thank you for reaching out! We\'ll get back to you shortly.');
    }
}
