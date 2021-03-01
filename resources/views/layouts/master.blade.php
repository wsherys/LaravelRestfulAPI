<html>
    <head>
        <title>{{ $judul }} - @yield('title')</title>
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
        @section('tes')
       
        @show
        <div class="container">
            <div class="row">
                <div class="col col-md-12">&nbsp;</div>
                <div class="col col-md-11">&nbsp; <h5><b>Page list article</b></h5> </div>
                <div class="col col-md-1">&nbsp;
                    <a href="/ArtikelPages/PageTambah"> <input type="button" value="+ Tambah" class="btn btn-primary btn-sm"> </a>
                </div>
        
                <div class="col col-md-12 ">&nbsp;
                    @if(session('success'))
                        <div class="alert alert-success"> {{session('success')}}</div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-error"> {{session('error')}}</div>
                    @endif
                </div>

                <div class="col col-md-12">
                <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Author</th>
                            <th>Article</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>

                </div>
            </div>
        </div>

        @yield('ajax')
    </body>
</html>