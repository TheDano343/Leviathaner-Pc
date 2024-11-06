@extends('layouts.admin')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>
                        Equipos
                        <a class="btn btn-primary float-end" href="{{url('equipo/create')}}">Agregar un equipo</a>
                    </h4>
                </div>
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre del producto</th>
                            <th>Tipo de tarjeta grafica</th>
                            <th>Procesador</th>
                            <th>Gabinete</th>
                            <th>Pantalla</th>
                            <th>Teclados</th>
                            <th>Mouse</th>
                            <th>Memoria Ram</th>
                            <th>Tarjeta Grafica</th>
                            <th>Tarjeta Madre</th>
                            <th>Refrigeracion</th>
                            <th>Alimentacion</th>
                            <th>Cpu</th>
                            <th>Categoria</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    @foreach($equipos as $equipo)
                    <tr>
                        <td>{{$equipo->idEquipos}}</td>
                        <td>{{$equipo->Nombre_producto}}</td>
                        <td>{{$equipo->Tipo_de_tarjeta_grafica}}</td>
                        <td>{{$equipo->Procesador->Nombre_del_producto}}</td>
                        <td>{{$equipo->Gabinete->Nombre_del_producto}}</td>
                        <td>{{$equipo->Pantalla->Nombre_del_producto}}</td>
                        <td>{{$equipo->Teclado->Nombre_del_producto}}</td>
                        <td>{{$equipo->Mouse->Nombre_del_producto}}</td>
                        <td>{{$equipo->Ram->Nombre_del_producto}}</td>
                        <td>{{$equipo->Grafica->Nombre_del_producto}}</td>
                        <td>{{$equipo->Madre->Nombre_del_producto}}</td>
                        <td>{{$equipo->Refrigeracion->Nombre_del_producto}}</td>
                        <td>{{$equipo->Alimentacion->Nombre_producto}}</td>
                        <td>{{$equipo->Cpu->Nombre_del_producto}}</td>
                        <td>{{$equipo->Categoria->Nombre}}</td>
                        <td>{{$equipo->Precio}}</td>


                        <td>
                        <th>
                            <a class="btn btn-warning"
                                href="{{ route('equipo.edit',['equipo'=>$equipo])}}">Editar</a>
                            </th>
                        </td>

                        <td>
                            <th>
                            <form action="{{ route('equipo.destroy',['equipo'=>$equipo])}}" method="post">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Eliminar" />
                            </form>
                            </th>
                        </td>

                        <td>
                            <th>
                            
                            </th>
                        </td>

                    </tr>
                    @endforeach
                </table>
                <div>
                {{ $equipos->links('pagination::bootstrap-5') }}
            </div> 
            </div>
        </div>
    </div>
    </div>

    @endsection
</body>

</html>