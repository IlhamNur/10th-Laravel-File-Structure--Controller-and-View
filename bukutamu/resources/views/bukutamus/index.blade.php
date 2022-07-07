<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu - Data Tamu</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 
    <!-- custom css -->
    <style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    .mt0{ margin-top:0; }
    </style>
    
</head>
<body>

    <!-- container -->
    <div class="container">
 
        <div class="page-header">
            <h1>Buku Data Tamu</h1>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <a class="btn btn-warning m-b-1em" href="{{ route('bukutamus.create') }}">Masukkan Data Tamu Baru</a>

        <table class="table table-hover table-responsive table-bordered">
            
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Waktu</th>
                <th>Komentar</th>
            </tr>

            @foreach ($bukutamus as $bukutamu)
                <tr>
                    <td>{{ $bukutamu->nomor }}</td>
                    <td>{{ $bukutamu->nama }}</td>
                    <td>{{ $bukutamu->email }}</td>
                    <td>{{ $bukutamu->waktu }}</td>
                    <td>{{ $bukutamu->komentar }}</td>

                    <td>
                        <form action="{{ route('bukutamus.destroy',$bukutamu->nomor) }}" method="Post">
                            <a class="btn btn-warning m-r-1em" href="{{ route('bukutamus.edit',$bukutamu->nomor) }}">Ubah</a>
                            @csrf

                            @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $bukutamus->links() !!}

    </div> <!-- end .container -->
    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>