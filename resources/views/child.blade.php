@extends('layouts.master')

@section('title', 'Test')

@section('tes')
&nbsp;
@endsection
@section('ajax')
<script type="text/javascript">

var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        rowReorder: {
        selector: 'td:nth-child(2)'
        },
        "responsive": true,

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "searching": false,
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "{{ route('ArtikelPages.ListAjax') }}",
            "type": "GET",
            "data": function ( data ) {
                data.author = $('#author').val();
                data.text = $('#text').val();
            }
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            // "orderable": false, //set not orderable
            // "searchable": false, //set not orderable
        }
        ] });

    $('#btn-filter').click(function(){ //button filter event click
        table.ajax.reload();  //just reload table
    });
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });

});

</script>
@endsection