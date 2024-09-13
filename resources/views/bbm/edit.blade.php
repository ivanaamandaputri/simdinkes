{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Edit Data BBM</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bbm.update', $bbm->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Tanggal</label>
            <input type="datetime-local" name="tanggal" class="form-control"
                value="{{ $bbm->tanggal->format('Y-m-d\TH:i') }}" required>
        </div>

        <div class="form-group">
            <label>Nama Pegawai</label>
            <select name="nama" class="form-control" required>
                @foreach ($pegawai as $p)
                    <option value="{{ $p->id }}" {{ $bbm->pegawai_id == $p->id ? 'selected' : '' }}>
                        {{ $p->nama_lengkap }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>No Polisi</label>
            <select name="nopol" class="form-control" required>
                @foreach ($kendaraan as $k)
                    <option value="{{ $k->id }}" {{ $bbm->kendaraan_id == $k->id ? 'selected' : '' }}>
                        {{ $k->nopol }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Nama Kendaraan</label>
            <input type="text" name="nama_kendaraan" class="form-control" value="{{ $bbm->nama_kendaraan }}"
                required>
        </div>

        <div class="form-group">
            <label>Nominal</label>
            <input type="text" name="nominal" id="nominal" class="form-control"
                value="Rp {{ number_format($bbm->nominal, 2, ',', '.') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('bbm.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script>
    document.getElementById('nominal').addEventListener('input', function(e) {
        var value = e.target.value;
        // Remove all non-numeric characters except for commas
        value = value.replace(/[^0-9]/g, '');
        // Format as rupiah
        if (value) {
            e.target.value = 'Rp ' + new Intl.NumberFormat('id-ID').format(value);
        } else {
            e.target.value = '';
        }
    });
</script>
{{-- @endsection --}}
