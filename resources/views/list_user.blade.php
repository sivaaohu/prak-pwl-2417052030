@extends('layouts.app')
@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h4 class="card-title fw-bold text-primary mb-0">Daftar Pengguna</h4>
        <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm px-3">+ Tambah User</a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">No</th>
                        <th>Nama</th>
                        <th>NPM / NIM</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $index => $user)
                    <tr>
                        <td class="ps-4 fw-bold text-secondary">{{ $index + 1 }}</td>
                        <td class="fw-semibold">{{ $user->nama }}</td>
                        <td><span class="badge bg-secondary">{{ $user->nim }}</span></td>
                        <td><span class="badge bg-info text-dark">{{ $user->nama_kelas }}</span></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">Belum ada data pengguna.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection