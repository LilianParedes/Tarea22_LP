<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactoController extends Controller
{
    public function verContactos()
    {
        // Obtener los contactos ordenados por 'created_at' del más reciente al más antiguo
        $contactos = Contact::orderBy('created_at', 'desc')->get();

        // Retornar la vista y pasar los contactos
        return view('contactos.ver', ['contactos' => $contactos]);
    }
}

