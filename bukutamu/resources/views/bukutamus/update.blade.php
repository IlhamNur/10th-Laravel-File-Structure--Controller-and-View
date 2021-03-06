<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu - Ubah Data Tamu</title>
    
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>
<body>

    <!-- container -->
    <div class="container">
 
        <div class="page-header">
            <h1>Ubah Data Tamu</h1>
        </div>

        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form action="{{ route('bukutamus.update',$bukutamu->nomor) }}" method="POST">
            @csrf
            @method('PUT')
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Nama</td>
                    <td><input type='text' name='nama' value="{{ $bukutamu->nama }}" class='form-control' /></td>
                </tr>
                @error('nama')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td>Email</td>
                    <td><input type='email' name='email' value="{{ $bukutamu->email }}" class='form-control'></input></td>
                </tr>
                @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td>Komentar</td>
                    <td><textarea name='komentar' class='form-control'>{{ $bukutamu->komentar }}</textarea></td>
                </tr>
                @error('komentar')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td></td>
                    <td>
                        <input type='submit' value='Simpan Perubahan' class='btn btn-warning' />
                        <a href="{{ route('bukutamus.index') }}" class='btn btn-primary'>Kembali ke Buku Tamu</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>