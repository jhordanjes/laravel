<?php

namespace App\Http\Services;

use App\Contact;
use Carbon\Carbon;

class ContactService
{
    public static function create($data)
    {
        
        return Contact::create($data);
    }

    public static function list()
    {
        return $contacts = Contact::orderBy('nome','asc')->get();
    }

    public static function getContact($id)
    {
        return $contact = Contact::findOrFail($id);
    }

    public static function update($request, Contact $contact): Contact
    {
        $contact->update($request);
        return $contact;
    }

    public static function delete($id)
    {
        $contact = Contact::find($id);
        return $contact->delete();
    }
}
