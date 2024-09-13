{{-- @extends('layout')

@section('content') --}}
<div class="container">
    <h1>Tambah Kendaraan Baru</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kendaraan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>No Polisi</label>
            <input type="text" name="nopol" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama Kendaraan</label>
            <input type="text" name="nama_kendaraan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jenis</label>
            <input type="text" name="jenis" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tahun</label>
            <input type="text" name="tahun" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Warna</label>
            <input type="text" name="warna" class="form-control" required>
        </div>
        <div class="form-group">
            <label>No Rangka</label>
            <input type="text" name="no_rangka" class="form-control" required>
        </div>
        <div class="form-group">
            <label>No Mesin</label>
            <input type="text" name="no_mesin" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
{{-- @endsection --}}
