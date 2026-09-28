<form action="{{ route('mata-kuliah.store') }}" method="POST">
    @csrf

    <div>
        <label for="nama_mk">Nama Mata Kuliah</label>
        <input type="text" name="nama_mk" id="nama_mk" value="{{ old('nama_mk') }}" required>
        @error('nama_mk')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="sks">SKS</label>
        <!-- PENTING: Atribut name HARUS "sks" (huruf kecil semua) -->
        <input type="number" name="sks" id="sks" value="{{ old('sks') }}" required>
        @error('sks')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit">Simpan</button>
</form>