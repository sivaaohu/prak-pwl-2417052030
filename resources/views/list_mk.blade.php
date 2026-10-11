@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Daftar Mata Kuliah</h1>
    <a href="{{ route('mata-kuliah.create') }}">Tambah Mata Kuliah Baru</a>
    <br><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mks as $mk)
                <tr>
                    <td>{{ $mk->id }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td>
                        <a href="{{ route('mata-kuliah.edit', $mk->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('mata-kuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus mata kuliah ini?')">Hapus</button>
                        </form>
                </tr>
            @endforeach
        </tbody>
    </table>