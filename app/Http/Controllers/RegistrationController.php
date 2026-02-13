<?php

namespace App\Http\Controllers;

use App\Jobs\RegisterSuccessJobs;
use App\Models\Freelancer;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'sapaan' => 'required|in:Pak,Bu,Bang,Kak',
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:20|unique:freelancers,telepon',
            'gender' => 'required|in:L,P',
            'usia' => 'required|integer|min:17|max:100',
            'domisili' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
        ], [
            'telepon.unique' => 'Nomor telepon ini sudah terdaftar. Satu nomor hanya bisa mendaftar satu kali.'
        ]);
        

        $freelancer = Freelancer::create($validated);

        // Dispatch job untuk kirim pesan WhatsApp
        dispatch(new RegisterSuccessJobs($freelancer));

        return redirect()->route('register.success')
            ->with('success', 'Pendaftaran berhasil! Data Anda telah tersimpan.');
    }

    public function success()
    {
        return view('register-success');
    }
}
