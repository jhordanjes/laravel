<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ContactService;

class PdfController extends Controller
{
    public function index()
    {
        $contacts = ContactService::list();    
        return \PDF::loadView('templates.pdf', compact('contacts'))
                ->download('minha-agenda.pdf');
    }
}
