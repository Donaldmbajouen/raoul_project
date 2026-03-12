<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|max:20',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);
        
        $validated['status'] = 'new';
        
        Contact::create($validated);
        
        return redirect()->back()->with('success', __('Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.'));
    }
}
