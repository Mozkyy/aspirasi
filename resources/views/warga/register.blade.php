<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h1>Register Warga Baru</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('warga.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control" required maxlength="16">
        </div>

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required minlength="6">
        </div>

        <div class="form-group">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" required minlength="6">
        </div>

        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</div>


</body>
</html>