<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.operator">
    <title>Tambah User</title>
</head>

<body>
    <h1>Tambah User</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <br>
        <div class="form-group">
            <label>Hak Ases</label>
            <select name="level" class="form-control @error('level') is-invalid @enderror">
                <option value="" {{ old('level') == '' ? 'selected' : '' }}> - Pilih Level
                    -
                </option>
                <option value="admin" {{ old('level') == 'admin' ? 'selected' : '' }}> Admin</option>
                <option value="operator" {{ old('level') == 'operator' ? 'selected' : '' }}> Operator
                </option>
            </select>
            @error('level')
                <span class="invalid-feedback alert-danger" level="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>
