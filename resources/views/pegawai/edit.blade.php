{{-- @extends('layout')

@section('content') --}}
<div class="container">
    <h1>Edit Pegawai</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" value="{{ $pegawai->nama_lengkap }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label>NIP</label>
            <input type="text" name="nip" value="{{ $pegawai->nip }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
{{-- @endsection --}}
