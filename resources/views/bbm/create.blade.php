{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Tambah Data BBM</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bbm.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Tanggal</label>
            <input type="datetime-local" name="tanggal" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Nama Pegawai</label>
            <select name="nama" class="form-control" required>
                <option value="">Pilih Pegawai</option>
                @foreach ($pegawai as $p)
                    <option value="{{ $p->id }}">{{ $p->nama_lengkap }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>No Polisi</label>
            <input type="text" name="Nomor Polisi" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Nama Kendaraan</label>
            <input type="text" name="nama_kendaraan" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Nominal</label>
            <input type="text" id="nominal" name="nominal" class="form-control" placeholder="Masukkan Nominal">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('bbm.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>


<script>
    document.getElementById('nominal').addEventListener('input', function(e) {
        let value = parseInt(e.target.value.replace(/[^\d]/g, ''), 10);
        e.target.value = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        }).format(value);
    });
</script>

{{-- @endsection --}}
