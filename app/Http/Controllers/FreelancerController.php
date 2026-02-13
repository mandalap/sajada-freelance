<?php

namespace App\Http\Controllers;

use App\Jobs\RegisterSuccessJobs;
use App\Models\Freelancer;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    public function index()
    {
        $freelancers = Freelancer::orderBy('created_at', 'desc')
            ->paginate(20);

        $stats = [
            'total' => Freelancer::count(),
            'baru' => Freelancer::where('status', 'baru')->count(),
            'follow_up' => Freelancer::where('status', 'follow_up')->count(),
            'hot' => Freelancer::where('status', 'hot')->count(),
            'closed' => Freelancer::where('status', 'closed')->count(),
        ];

        return view('freelancers.index', compact('freelancers', 'stats'));
    }

    public function show(Freelancer $freelancer)
    {
        return view('freelancers.show', compact('freelancer'));
    }

    public function create()
    {
        return view('freelancers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'sapaan' => 'required|in:Bapak,Ibu,Saudara,Saudari',
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'gender' => 'required|in:L,P',
            'usia' => 'required|integer|min:17|max:100',
            'pekerjaan' => 'required|string|max:255',
            'domisili' => 'required|string|max:255',
            'catatan' => 'nullable|string',
            'status' => 'required|in:baru,follow_up,hot,closed,tidak_tertarik',
        ]);

        $member = Freelancer::create($validated);

        RegisterSuccessJobs::dispatch($member);

        return redirect()->route('freelancers.index')
            ->with('success', 'Data lead berhasil ditambahkan.');
    }

    public function edit(Freelancer $freelancer)
    {
        return view('freelancers.edit', compact('freelancer'));
    }

    public function update(Request $request, Freelancer $freelancer)
    {
        $validated = $request->validate([
            'sapaan' => 'required|in:Bapak,Ibu,Saudara,Saudari',
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'gender' => 'required|in:L,P',
            'usia' => 'required|integer|min:17|max:100',
            'pekerjaan' => 'required|string|max:255',
            'domisili' => 'required|string|max:255',
            'catatan' => 'nullable|string',
            'status' => 'required|in:baru,follow_up,hot,closed,tidak_tertarik',
        ]);

        $freelancer->update($validated);

        return redirect()->route('freelancers.index')
            ->with('success', 'Data lead berhasil diperbarui.');
    }

    public function destroy(Freelancer $freelancer)
    {
        $freelancer->delete();

        return redirect()->route('freelancers.index')
            ->with('success', 'Data lead berhasil dihapus.');
    }
}
