<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $mahasiswas = Mahasiswa::query()
            ->when($request->search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%{$search}%")
                        ->orWhere('nrp', 'like', "%{$search}%")
                        ->orWhere('prodi', 'like', "%{$search}%");
                });
            })
            ->when($request->angkatan, fn ($query, $angkatan) => $query->where('angkatan', $angkatan))
            ->orderBy('nama')
            ->paginate(10)
            ->withQueryString();

        $daftarAngkatan = Mahasiswa::query()->distinct()->orderBy('angkatan')->pluck('angkatan');

        return view('admin.mahasiswa.index', compact('mahasiswas', 'daftarAngkatan'));
    }

    public function create()
    {
        return view('admin.mahasiswa.form', ['mahasiswa' => new Mahasiswa()]);
    }

    public function store(Request $request)
    {
        Mahasiswa::create($this->validated($request));

        return redirect()->route('admin.mahasiswa.index')->with('success', 'Data mahasiswa ditambahkan.');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('admin.mahasiswa.form', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update($this->validated($request, $mahasiswa));

        return redirect()->route('admin.mahasiswa.index')->with('success', 'Data mahasiswa diperbarui.');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('admin.mahasiswa.index')->with('success', 'Data mahasiswa dihapus.');
    }

    private function validated(Request $request, ?Mahasiswa $mahasiswa = null): array
    {
        return $request->validate([
            'nrp' => ['required', 'digits:10', Rule::unique('mahasiswas', 'nrp')->ignore($mahasiswa)],
            'nama' => ['required', 'string', 'max:255'],
            'prodi' => ['required', 'string', 'max:255'],
            'angkatan' => ['required', 'digits:4'],
            'ipk' => ['nullable', 'numeric', 'between:0,4'],
        ]);
    }
}
