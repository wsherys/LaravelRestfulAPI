
<html>
    <head>
        <title>{{ $judul }} - Tambah</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Script -->
        <!-- Datatables CSS CDN -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <!-- jQuery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Datatables JS CDN -->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>


    </head>
    <body>

    @if(session('error'))
        <div class="alert alert-error"> {{session('error')}}</div>
    @endif
    <div class="container">
        <br>
        <div class="row">
            <div class="col col-md-1">&nbsp; 
                <a href="/"> <input type="button" value="Kembali" class="btn btn-secondary btn-sm"> </a> </div>
            <div class="col col-md-11">&nbsp;</div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-8">
            <form action="/ArtikelPages/Tambah" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="author"><b>Author</b>:</label>
                <input type="author" name="author" class="form-control" placeholder="Masukkan nama author" required>
            </div>
            <div class="form-group">
                <label for="artikel"><b>Judul Artikel</b>:</label>
                <input type="artikel" name="text" class="form-control" placeholder="Masukkan judul artikel" required>
            </div>

            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </form> 
            </div>
        </div>
    </div>

    

    </body>
</html>