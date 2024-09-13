{{-- @extends('layout')

@section('content') --}}
<div class="container">
    <h1>Edit Kendaraan</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form untuk mengedit data kendaraan -->
    <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>No Polisi</label>
            <input type="text" name="nopol" value="{{ $kendaraan->nopol }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Nama Kendaraan</label>
            <input type="text" name="nama_kendaraan" value="{{ $kendaraan->nama_kendaraan }}" class="form-control"
                required>
        </div>

        <div class="form-group">
            <label>Jenis</label>
            <input type="text" name="jenis" value="{{ $kendaraan->jenis }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Tahun</label>
            <input type="text" name="tahun" value="{{ $kendaraan->tahun }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Warna</label>
            <input type="text" name="warna" value="{{ $kendaraan->warna }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label>No Rangka</label>
            <input type="text" name="no_rangka" value="{{ $kendaraan->no_rangka }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label>No Mesin</label>
            <input type="text" name="no_mesin" value="{{ $kendaraan->no_mesin }}" class="form-control" required>
        </div>

        <!-- Tombol submit untuk memperbarui data -->
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
{{-- @endsection --}}
