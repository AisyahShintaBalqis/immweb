<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('gallery.index');
    }
    public function create()
    {
        return view('gallery.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

        Gallery::create([
            'name' => $request->name,
            'name' => $request->jabatan,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Informasi kontak berhasil ditambahkan');
    }

    public function show($id)
    {
        //menampilkan kontak tertentu
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

        $gallery = Gallery::findOrFail($id);
        $gallery->update([
            'name' => $request->name,
            'name' => $request->jabatan,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('gallery.edit')->with('success', 'Informasi kontak berhasil diubah');
    }

    public function destroy($id)
    {
        //menghapus kontak tertentu
    }
}
