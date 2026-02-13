<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    // Page d'accueil
    public function home()
    {
        return view('pages.home');
    }

    // Page À propos
    public function about()
    {
        return view('pages.about');
    }

    // Page Événements
    public function events()
    {
        return view('pages.events');
    }

    // Page Artistes
    public function artists()
    {
        return view('pages.artists');
    }

    // Page Patrimoine
    public function heritage()
    {
        return view('pages.heritage');
    }

    // Page Ressources
    public function resources()
    {
        return view('pages.resources');
    }

    // Page Boutique
    public function shop()
    {
        return view('pages.shop');
    }

    // Page Contact
    public function contact()
    {
        return view('pages.contact');
    }

    // Traitement du formulaire de contact
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10'
        ]);

        // Ici vous pourriez envoyer un email
        // Mail::to('contact@apacc-m.fr')->send(new ContactMail($validated));

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}