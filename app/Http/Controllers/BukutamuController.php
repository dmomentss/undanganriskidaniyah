<?php

namespace App\Http\Controllers;

use App\Models\bukutamu;
use App\Http\Requests\StorebukutamuRequest;
use App\Http\Requests\UpdatebukutamuRequest;
use Illuminate\Http\Request;


class BukutamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukutamu = bukutamu::all();
        return view('index', ['bukutamu' => $bukutamu]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'kehadiran' => 'required|in:hadir,tidakhadir',
            'pesan' => 'required',
        ]);

        // Simpan data kehadiran baru ke dalam database
        bukutamu::create([
            'nama' => $request->nama,
            'kehadiran' => $request->kehadiran,
            'pesan' => $request->pesan,
        ]);

        return redirect('/#rsvp')->with('success', 'berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(bukutamu $bukutamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bukutamu $bukutamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebukutamuRequest $request, bukutamu $bukutamu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan pesan yang akan dihapus
        $bukutamu = bukutamu::findOrFail($id);

        // Hapus pesan dari database
        $bukutamu->delete();

        return redirect('/bukutamu')->with('success', 'Pesan berhasil dihapus!');
    }
}
