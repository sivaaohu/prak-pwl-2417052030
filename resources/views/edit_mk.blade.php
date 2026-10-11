@extends('layouts.app')
@section('content')

<div class="container">
    <h1> Edit Mata Kuliah</h1>
    <form action="{{ route('mata-kuliah.update', $mk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama_mk">Nama Mata Kuliah</label>
        <input type="text" name="nama_mk" id="nama_mk" value="{{ old('nama_mk') }}" required><br><br>
        
        <label for="sks">SKS</label>
        <!-- PENTING: Atribut name HARUS "sks" (huruf kecil semua) -->
        <input type="number" name="sks" id="sks" value="{{ old('sks') }}" required><br><br>

        <button type="submit">Update</button>
    </form>
</div>
@endsection
