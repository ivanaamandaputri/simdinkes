{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Daftar Data BBM</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('bbm.create') }}" class="btn btn-primary mb-3">Tambah Data BBM</a>

    <table class="table-bordered table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama Pegawai</th>
                <th>No Polisi</th>
                <th>Nama Kendaraan</th>
                <th>Nominal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bbms as $bbm)
                <tr>
                    <td>{{ $bbm->tanggal->format('Y-m-d H:i') }}</td>
                    <td>{{ $bbm->pegawai->nama_lengkap }}</td>
                    <td>{{ $bbm->kendaraan->nopol }}</td>
                    <td>{{ $bbm->nama_kendaraan }}</td>
                    <td>{{ $bbm->nominal }}</td>
                    <td>
                        <a href="{{ route('bbm.edit', $bbm->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('bbm.destroy', $bbm->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- @endsection --}}
