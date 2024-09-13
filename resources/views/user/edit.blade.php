<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <h1>Edit User</h1>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Method spoofing untuk mengubah request menjadi PUT -->

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="{{ old('username', $user->username) }}" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <small>Biarkan kosong jika tidak ingin mengubah password</small>
        <br><br>

        <div class="form-group">
            <label>Hak Akses</label>
            <select name="level" class="form-control @error('level') is-invalid @enderror">
                <option value="" {{ old('level', $user->level) == '' ? 'selected' : '' }}>- Pilih Level -</option>
                <option value="admin" {{ old('level', $user->level) == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="operator" {{ old('level', $user->level) == 'operator' ? 'selected' : '' }}>Operator
                </option>
            </select>
            @error('level')
                <span class="invalid-feedback alert-danger" level="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <br>
        <button type="submit">Update</button>
    </form>
</body>

</html>
