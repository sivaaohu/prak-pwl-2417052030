<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover table-striped align-middle mb-0">
                <thead class="table-primary">
                    <tr>
                        <th class="ps-3">ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td class="ps-3 fw-bold">{{ $user->id }}</td>
                        <td>{{ $user->nama }}</td>
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