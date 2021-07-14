<html>
<head>
    <title></title>
    <meta content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            font-family: 'Exo', sans-serif;
        }
        .header-col{
            background: #E3E9E5;
            color:#536170;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
        .header-calendar{
            background: #0cacea;color:white;
            height:50px;

        }
        .box-day{
            border:1px solid #E3E9E5;
            height:79px;
        }
        .box-dayoff{
            border:1px solid #E3E9E5;
            height:79px;
            background-color: #ccd1ce;
        }
        .col{
            text-align: right;
        }



    </style>

</head>
<body>
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="col"  style="display: flex; justify-content: space-between; padding: 0px; top:-0; right:-0; px:-6; py:-4; sm:block; height:0px">
            @auth
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Cerrar sesión') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Iniciar Sesión</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrarse</a>
                @endif
            @endauth
        </div>
    @endif
</div>

<div class="container">
    <div style="height:0px"></div>
    <p class="lead">
    <h3>Calendario</h3>
    <a class="btn-ingresar" type="submit" href="{{route ('evento.crear')}}">Crear Evento</a>
    <hr>

    <div class="row header-calendar" >

        <div class="col" style="display: flex; justify-content: space-between; padding: 0px;">
            <a  href="{{ asset('/Evento/creado/') }}/<?= $data['last']; ?>" style="margin:15px;">
                <i class="fas fa-chevron-circle-left" style="font-size:30px;color:white;"></i>
            </a>
            <h2 style="font-weight:bold;margin:10px;"><?= $mespanish; ?> <small><?= $data['year']; ?></small></h2>
            <a  href="{{ asset('/Evento/creado/') }}/<?= $data['next']; ?>" style="margin:15px;">
                <i class="fas fa-chevron-circle-right" style="font-size:30px;color:white;"></i>
            </a>
        </div>

    </div>
    <div class="row">
        <div class="col header-col">Lunes</div>
        <div class="col header-col">Martes</div>
        <div class="col header-col">Miercoles</div>
        <div class="col header-col">Jueves</div>
        <div class="col header-col">Viernes</div>
        <div class="col header-col">Sabado</div>
        <div class="col header-col">Domingo</div>
    </div>


    @foreach ($data['calendar'] as $weekdata)
        <div class="row">
            <!-- ciclo de dia por semana -->
            @foreach  ($weekdata['datos'] as $dayweek)

                @if  ($dayweek['mes']==$mes)
                    <div class="col box-day">
                    {{ $dayweek['dia']  }}
                    <!-- evento -->
                        @foreach  ($dayweek['evento'] as $evento)
                            <a class="badge badge-primary" href="{{ route('Evento.details', ['id'=>$evento->id])}}">
                                {{ $evento->titulo }}
                            </a>
                        @endforeach
                    </div>
                @else
                    <div class="col box-dayoff">
                    </div>
                @endif


            @endforeach
        </div>
    @endforeach

</div> <!-- /container -->

</body>
</html>
