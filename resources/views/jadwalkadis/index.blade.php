{{-- @extends('layout')

@section('content') --}}
<div class="container">
    <h1>Data Jadwal Kepala Dinas</h1>

    {{-- Menampilkan pesan sukses jika ada --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    {{-- Tombol untuk menambah jadwal baru --}}
    <a href="{{ route('jadwalkadis.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>

    {{-- Tabel untuk menampilkan data jadwal --}}
    <table class="table-bordered table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Waktu</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwalkadiss as $jadwalkadis)
                <tr>
                    <td>{{ $jadwalkadis->tanggal }}</td>
                    <td>{{ $jadwalkadis->keterangan }}</td>
                    <td>{{ $jadwalkadis->waktu_mulai }} - {{ $jadwalkadis->waktu_selesai }}</td>
                    <td>{{ $jadwalkadis->lokasi }}</td>
                    <td>
                        {{-- Tombol untuk mengedit jadwal --}}
                        <a href="{{ route('jadwalkadis.edit', $jadwalkadis->id) }}" class="btn btn-warning">Edit</a>

                        {{-- Tombol untuk menghapus jadwal dengan konfirmasi --}}
                        <form action="{{ route('jadwalkadis.destroy', $jadwalkadis->id) }}" method="POST"
                            style="display:inline;">
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
