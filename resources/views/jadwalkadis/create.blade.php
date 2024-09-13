{{-- @extends('layout')

@section('content') --}}
<div class="container">
    <h1>Tambah Jadwal Kepala Dinas</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('jadwalkadis.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" class="form-control" name="tanggal" value="{{ old('tanggal') }}" required>
        </div>

        <div class="form-group">
            <label for="waktu_mulai">Waktu Mulai:</label>
            <input type="time" class="form-control" name="waktu_mulai" value="{{ old('waktu_mulai') }}" required>
        </div>

        <div class="form-group">
            <label for="waktu_selesai">Waktu Selesai:</label>
            <input type="time" class="form-control" name="waktu_selesai" value="{{ old('waktu_selesai') }}" required>
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi:</label>
            <input type="text" class="form-control" name="lokasi" value="{{ old('lokasi') }}" required>
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan:</label>
            <textarea class="form-control" name="keterangan" rows="3" required>{{ old('keterangan') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('jadwalkadis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
{{-- @endsection --}}
