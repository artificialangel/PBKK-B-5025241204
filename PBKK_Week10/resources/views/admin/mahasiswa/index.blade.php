@extends('adminlte::page')

@section('title', 'Data Mahasiswa')

@section('content_header')
    <h1>Data Mahasiswa</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-header">
            <form method="GET" action="{{ route('admin.mahasiswa.index') }}" class="form-inline">
                <input type="text" name="search" value="{{ request('search') }}" class="form-control mr-2"
                       placeholder="Cari nama / NRP / prodi">
                <select name="angkatan" class="form-control mr-2">
                    <option value="">Semua angkatan</option>
                    @foreach ($daftarAngkatan as $a)
                        <option value="{{ $a }}" @selected(request('angkatan') == $a)>{{ $a }}</option>
                    @endforeach
                </select>
                <button class="btn btn-primary mr-2" type="submit">Cari</button>
                <a href="{{ route('admin.mahasiswa.index') }}" class="btn btn-secondary mr-2">Reset</a>
                @can('create-data')
                    <a href="{{ route('admin.mahasiswa.create') }}" class="btn btn-success ml-auto">Tambah</a>
                @endcan
            </form>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead>
                <tr><th>NRP</th><th>Nama</th><th>Prodi</th><th>Angkatan</th><th>IPK</th><th style="width:160px">Aksi</th></tr>
                </thead>
                <tbody>
                @forelse ($mahasiswas as $m)
                    <tr>
                        <td>{{ $m->nrp }}</td>
                        <td>{{ $m->nama }}</td>
                        <td>{{ $m->prodi }}</td>
                        <td>{{ $m->angkatan }}</td>
                        <td>{{ $m->ipk ?? '-' }}</td>
                        <td>
                            @can('edit-data')
                                <a href="{{ route('admin.mahasiswa.edit', $m) }}" class="btn btn-sm btn-warning">Edit</a>
                            @endcan
                            @can('delete-data')
                                <form action="{{ route('admin.mahasiswa.destroy', $m) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="text-center text-muted">Data tidak ditemukan.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $mahasiswas->links('pagination::bootstrap-4') }}
        </div>
    </div>
@stop
