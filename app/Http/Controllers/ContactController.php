<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function create()
    {
        return view('contact.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

        Contact::create([
            'name' => $request->name,
            'name' => $request->jabatan,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('contact.index')->with('success', 'Informasi kontak berhasil ditambahkan');
    }

    public function show($id)
    {
        //menampilkan kontak tertentu
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update([
            'name' => $request->name,
            'name' => $request->jabatan,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('contact.edit')->with('success', 'Informasi kontak berhasil diubah');
    }

    public function destroy($id)
    {
        //menghapus kontak tertentu
    }
}
