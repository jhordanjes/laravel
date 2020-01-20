<?php

namespace App\Http\Controllers;
use App\Http\Services\ContactService;
use App\Http\Requests\ContactRequest;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = ContactService::list(); 
        $title = "Meus Contatos";   
        return view('templates.list', compact('contacts','title')); 
    }

    public function create()
    {
        $title = "Adicionar Contato";
        return view('templates.create',compact('title'));
    }

    public function store(ContactRequest $request)
    {
        $nameFile = null;
        $data = $request->all();

        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) 
        {
        
            $name = uniqid(date('HisYmd'));
            $extension = $request->thumbnail->extension();
            $nameFile = "{$name}.{$extension}";
            $upload = $request->thumbnail->storeAs('img', $nameFile);
            $data['thumbnail'] = $nameFile;
        }

        $contact  = ContactService::create($data);
        return redirect()
            ->route('contacts.index')
            ->with('msg', 'Contato cadastrado com sucesso!');
    }

    public function show($id)
    {
        $contact = ContactService::getContact($id);
        $title = $contact->nome;

        return view('templates.show', compact('contact','title'));

    }

    public function edit($id)
    {
        $contact = ContactService::getContact($id);
        $title = "Editar";
        return view('templates.edit', compact('contact','title'));
    }

    public function update(ContactRequest $request, $id)
    {
        $contact = ContactService::getContact($id);

        $nameFile = null;
 
        $data = $request->all();
        
        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) 
        {
            $name = uniqid(date('HisYmd'));
            $extension = $request->thumbnail->extension();    
            $nameFile = "{$name}.{$extension}";
            $upload = $request->thumbnail->storeAs('img', $nameFile);
            $data['thumbnail'] = $nameFile;
        }

        ContactService::update($data, $contact);
        return redirect()->route('contacts.show',$id)
                         ->with('msg','Editado com sucesso!');
    }

    public function destroy($id)
    {
        $contact = ContactService::getContact($id);
        if($contact->thumbnail){
           unlink(storage_path('app/public/img/'.$contact->thumbnail));
        }
        ContactService::delete($id);
        return redirect()->route('home')
                         ->with('msg','Excluido com sucesso');
    }
}
