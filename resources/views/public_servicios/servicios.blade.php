@extends('layouts.Plantilla')

@section('contenido') <br>

    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/switch.css') }}">
         <link rel="stylesheet" href="css/public.css">
    </head>



    <div class="cardd">
        <div class="tittle-cards details3 ">
         <h1><font  >SERVICIOS</font></h1>
    </div>
        <div class="card-body">

            <div class="container-card ">
                <div class="row contenido">
                    {{-- <form method="GET" action="{{ route ('servicios.comprar')}}"   enctype="multipart/form-data">
                    @csrf

                </form> --}}
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $('.des').hide();
        var arr = <?php echo $servicios; ?>;
        $(document).ready(function() {


            var alvaro = '';
            for (vari = 0; vari < arr.length; vari++) {
                $('.contenido').append(`

                    <div class="col-md-6">
                    <div class="card_">
                        <div class="card-body ${arr[vari]["ser_codigo"]}" data-alv="${arr[vari]["ser_codigo"]}" data-des="${arr[vari]["ser_descripcion"]}">
                         <h5 class="card-title" style="height:40px">${arr[vari]["ser_titulo"]}</h5>
                        <figure>
                         <img class="card-img-top" src="/img/${arr[vari]["ser_imagen"]}" alt="Card image cap"  >
                         </figure>
                         <div class="card-body des" id="des_${arr[vari]["ser_codigo"]}">
                         <h7 class="card-title" style="height:40px">${arr[vari]["ser_descripcion"]}</h7>
                        <br> <a href="p_servicios/${arr[vari]["ser_codigo"]}" class="valor">Más información</a>
                         </div>
                     </div>
                </div>
                    </div>`);



                $('.' + arr[vari]["ser_codigo"]).on('click', function() {
                    var data = $(this).data('alv');
                    var des = $(this).data('des');
                    // var valor=$(this).data('des');
                    console.log(data);
                    $('#des_' + data).html(des + `<br><br> <a href="p_servicios/${data}" class="valor">Más información</a>`);
                });
                $('.close' + arr[vari]["ser_codigo"]).on('click', function() {
                    var data = $(this).data('alv');
                    $('#des_' + data).hide();
                });

            }
        });
    </script>

@stop
