@extends('adminlte::page')

@section('title', 'Dashboard Admin')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <x-adminlte-small-box title="{{ $totalMahasiswa }}" text="Total Mahasiswa" icon="fas fa-user-graduate"
                theme="info" url="{{ route('admin.mahasiswa.index') }}" url-text="Lihat data"/>
        </div>
        <div class="col-lg-3 col-6">
            <x-adminlte-small-box title="{{ $totalUser }}" text="Total Pengguna" icon="fas fa-users" theme="success"/>
        </div>
        <div class="col-lg-3 col-6">
            <x-adminlte-small-box title="{{ $totalStaf }}" text="Pengguna Role Staf" icon="fas fa-id-badge" theme="warning"/>
        </div>
        <div class="col-lg-3 col-6">
            <x-adminlte-small-box title="{{ number_format($rataIpk, 2) }}" text="Rata-rata IPK" icon="fas fa-chart-line" theme="primary"/>
        </div>
    </div>

    <div class="card">
        <div class="card-header"><h3 class="card-title">Mahasiswa Terbaru</h3></div>
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead><tr><th>NRP</th><th>Nama</th><th>Prodi</th><th>Angkatan</th></tr></thead>
                <tbody>
                @forelse ($mahasiswaTerbaru as $m)
                    <tr><td>{{ $m->nrp }}</td><td>{{ $m->nama }}</td><td>{{ $m->prodi }}</td><td>{{ $m->angkatan }}</td></tr>
                @empty
                    <tr><td colspan="4" class="text-center text-muted">Belum ada data.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop
