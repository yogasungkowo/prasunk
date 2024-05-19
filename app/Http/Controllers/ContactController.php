<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
        public function submit(Request $request)
        {
            // Validasi formulir
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',
            ]);

            // Kirim email
            Mail::to('prayogasungkowo12@mail.com')->send(new ContactMail($request->all()));

            return back()->with('success', 'Message sent successfully!');
        }
}
