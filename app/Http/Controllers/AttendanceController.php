<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'kehadiran' => 'required|in:hadir,tidak',
            'jumlah' => 'required',
        ]);

        // Simpan data kehadiran baru ke dalam database
        Attendance::create([
            'nama' => $request->nama,
            'kehadiran' => $request->kehadiran,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('/#rsvp')->with('success', 'Data kehadiran berhasil dikirim!');
    }
}
