@extends('layouts.admin')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
<div class="card-header">

    <h4>Agregar un equipo
    <a class="btn btn-danger float-end" href="{{url('equipo')}}">Regresar</a>
    </h4>
<form action="{{route('equipo.store')}}" method="post">
        @csrf
        @method('post')

        <div class="form-group">
        <label>Nombre producto</label>
        <input class="form-control" type="text" name="Nombre_producto">
        </div>
        
        <div class="form-group">
        <label>Tipo de tarjeta grafica</label>
        <input class="form-control" type="text" name="Tipo_de_tarjeta_grafica">
        </div>

        <div class="form-group">
                <label for="procecadores_id">Procesadores</label>
                <select class="form-control" name="procecadores_id">
                    <option value="">Selecciona un Procesador</option>
                    @foreach($procesadores as $procesador)
                        <option value="{{ $procesador->idProcesador  }}">{{ $procesador->Nombre_del_producto }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="gabinetes_id">Gabinetes</label>
                <select class="form-control" name="gabinetes_id">
                    <option value="">Selecciona un gabinete</option>
                    @foreach($gabinetes as $gabinete)
                        <option value="{{ $gabinete->idGabinetes }}">{{ $gabinete->Nombre_del_producto }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="pantallas_id">Pantalla</label>
                <select class="form-control" name="pantallas_id">
                    <option value="">Selecciona una pantalla</option>
                    @foreach($pantallas as $pantalla)
                        <option value="{{ $pantalla->idPantallas  }}">{{ $pantalla->Nombre_del_producto }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="teclados_id">Teclado</label>
                <select class="form-control" name="teclados_id">
                    <option value="">Selecciona un teclado</option>
                    @foreach($teclados as $teclado)
                        <option value="{{ $teclado->idTeclado }}">{{ $teclado->Nombre_del_producto }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="mouse_id">Mouse</label>
                <select class="form-control" name="mouse_id">
                    <option value="">Selecciona un mouse</option>
                    @foreach($mouses as $mouse)
                        <option value="{{ $mouse->idMouse }}">{{ $mouse->Nombre_del_producto }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="rams_id">Ram</label>
                <select class="form-control" name="rams_id">
                    <option value="">Selecciona una memoria Ram</option>
                    @foreach($rams as $ram)
                        <option value="{{ $ram->idRam }}">{{ $ram->Nombre_del_producto }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="graficas_id">Grafica</label>
                <select class="form-control" name="graficas_id">
                    <option value="">Selecciona una carrera</option>
                    @foreach($graficas as $grafica)
                        <option value="{{ $grafica->idTarjetaGrafica }}">{{ $grafica->Nombre_del_producto }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="madres_id">Tarjeta Madre</label>
                <select class="form-control" name="madres_id">
                    <option value="">Selecciona una Tarjeta Madre</option>
                    @foreach($madres as $madre)
                        <option value="{{ $madre->idTarjetas_Madre }}">{{ $madre->Nombre_del_producto }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="refrigeracion_id">Refrigeracion</label>
                <select class="form-control" name="refrigeracion_id">
                    <option value="">Selecciona una refrigeracion</option>
                    @foreach($refrigeraciones as $refrigeracion)
                        <option value="{{ $refrigeracion->idSistema_refrigeracion }}">{{ $refrigeracion->Nombre_del_producto }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="alimentaciones_id">Alimentacion</label>
                <select class="form-control" name="alimentaciones_id">
                    <option value="">Selecciona una Alimentacion</option>
                    @foreach($alimentaciones as $alimentacion)
                        <option value="{{ $alimentacion->idAlimentacion }}">{{ $alimentacion->Nombre_producto }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="cpu_id">Cpu</label>
                <select class="form-control" name="cpu_id">
                    <option value="">Selecciona una CPU</option>
                    @foreach($cpus as $cpu)
                        <option value="{{ $cpu->idCpu }}">{{ $cpu->Nombre_del_producto }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="categorias_id">Gama(Categoria)</label>
                <select class="form-control" name="categorias_id">
                    <option value="">Selecciona una Gama(Categoria)</option>
                    @foreach($categorium as $categorium)
                        <option value="{{ $categorium->idCategoria }}">{{ $categorium->Nombre }}</option>
                    @endforeach
                </select>
            </div>
        
        <div class="form-group">
        <label>Descripcion</label>
        <input class="form-control" type="text" name="Descripcion">
        </div>

        <div class="form-group">
        <label>Precio</label>
        <input class="form-control" type="text" name="Precio">       
        </div>
       
        <button class="btn btn-primary" type="submit">Crear</button>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
@endsection
</body>
</html>
