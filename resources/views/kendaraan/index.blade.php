{{-- @extends('layout')

@section('content') --}}
<div class="container">
    <h1>Data Kendaraan</h1>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-3">Tambah Kendaraan</a>

    <table class="table-bordered table">
        <thead>
            <tr>
                <th>No Polisi</th>
                <th>Nama Kendaraan</th>
                <th>Jenis</th>
                <th>Tahun</th>
                <th>Warna</th>
                <th>No Rangka</th>
                <th>No Mesin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kendaraans as $kendaraan)
                <tr>
                    <td>{{ $kendaraan->nopol }}</td>
                    <td>{{ $kendaraan->nama_kendaraan }}</td>
                    <td>{{ $kendaraan->jenis }}</td>
                    <td>{{ $kendaraan->tahun }}</td>
                    <td>{{ $kendaraan->warna }}</td>
                    <td>{{ $kendaraan->no_rangka }}</td>
                    <td>{{ $kendaraan->no_mesin }}</td>
                    <td>
                        <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST"
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

