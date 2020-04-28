@extends('layouts.admin')
@section('content')
    <html lang="en">

    <head>

    </head>

    <body>



    <div class="container text-center">


        <strong>Select Date:</strong> <input type="text" id="datepicker" class="from-control">

    </div>


    <script type="text/javascript">

        $( "#datepicker" ).datepicker();

    </script>


    </body>

    </html>


@stop