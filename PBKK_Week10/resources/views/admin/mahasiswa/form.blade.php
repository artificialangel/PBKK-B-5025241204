@extends('adminlte::page')

@php($isEdit = $mahasiswa->exists)

@section('title', $isEdit ? 'Edit Mahasiswa' : 'Tambah Mahasiswa')

@section('content_header')
    <h1>{{ $isEdit ? 'Edit' : 'Tambah' }} Mahasiswa</h1>
@stop

@section('content')
    <div class="card">
        <form method="POST"
              action="{{ $isEdit ? route('admin.mahasiswa.update', $mahasiswa) : route('admin.mahasiswa.store') }}">
            @csrf
            @if ($isEdit) @method('PUT') @endif
            <div class="card-body">
                @foreach (['nrp' => 'NRP', 'nama' => 'Nama', 'prodi' => 'Program Studi', 'angkatan' => 'Angkatan', 'ipk' => 'IPK'] as $field => $label)
                    <div class="form-group">
                        <label for="{{ $field }}">{{ $label }}</label>
                        <input id="{{ $field }}" name="{{ $field }}" type="text"
                               class="form-control @error($field) is-invalid @enderror"
                               value="{{ old($field, $mahasiswa->{$field}) }}">
                        @error($field)<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                @endforeach
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="{{ route('admin.mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@stop
