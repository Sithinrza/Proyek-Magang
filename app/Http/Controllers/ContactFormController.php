<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactAdd;

class ContactFormController extends Controller
{
     public function store(Request $request)
        {
            // 1. Validasi data yang masuk
            $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone_number' => 'required|string|max:20',
                'cooperation_model' => 'required|string',
                'message' => 'required|string',
            ]);

            // 2. Simpan data ke database
            ContactAdd::create($validatedData);

            // 3. Kembali ke halaman sebelumnya dengan pesan sukses
            return redirect()->back()->with('success', 'Pesan Anda telah berhasil terkirim!');
        }
}
