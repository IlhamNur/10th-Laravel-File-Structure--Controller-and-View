<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu - Menambah Tamu</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>
<body>

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <!-- container -->
    <div class="container">
 
        <div class="page-header">
            <h1>Masukkan Data Tamu</h1>
        </div>

        @php
            date_default_timezone_set("Asia/Jakarta");
        @endphp

        <form action="{{ route('bukutamus.store') }}" method="POST">
            @csrf
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Nama</td>
                    <td><input type='text' name='nama' class='form-control' /></td>
                </tr>
                @error('nama')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td>Email</td>
                    <td><input type='email' name='email' class='form-control'/></td>
                </tr>
                @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td>Waktu</td>
                    <td><input type='datetime' name='waktu' class='form-control' value="{{ date('Y-m-d H:i:s') }}"/></td>
                </tr>
                <tr>
                    <td>Komentar</td>
                    <td><textarea name='komentar' class='form-control'></textarea></td>
                </tr>
                @error('komentar')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td></td>
                    <td>
                        <input type='submit' value='Simpan' class='btn btn-warning' />
                        <a class="btn btn-primary" href="{{ route('bukutamus.index') }}">Kembali ke Buku Tamu</a>
                    </td>
                </tr>
            </table>
        </form>
    
    </div> <!-- end .container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>