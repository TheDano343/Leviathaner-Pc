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
                        Tarjeta Grafica
                        <a class="btn btn-primary float-end" href="{{url('grafica/create')}}">Agregar una grafica</a>
                    </h4>
                </div>
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre del producto</th>
                            <th>Coprocesador</th>
                            <th>Marca</th>
                            <th>RAM</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    @foreach($graficas as $grafica)
                    <tr>
                        <td>{{$grafica->idTarjetaGrafica}}</td>
                        <td>{{$grafica->Nombre_del_producto}}</td>
                        <td>{{$grafica->Coprocesador}}</td>
                        <td>{{$grafica->Marca}}</td>
                        <td>{{$grafica->Ram_para_graficos}}</td>
                        <td>{{$grafica->Descripcion}}</td>
                        <td><img src="{{asset('storage/'.$grafica->Portada)}}" alt="image" class="rounded-circle" width="50" height="50"></td>


                        <td>
                        <th><a class="btn btn-warning" href="{{route('grafica.edit', ['grafica'=>$grafica])}}">Editar</a></th>
                        </td>

                        <td>
                            <th>
                            <form action="{{route('grafica.destroy', ['grafica'=>$grafica])}}" method="post">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Eliminar" />
                            </form>
                            </th>
                        </td>

                    </tr>
                    @endforeach
                </table>
                <div>
                {{ $graficas->links('pagination::bootstrap-5') }}
                </div> 
            </div>
        </div>
    </div>
    </div>

    @endsection


</body>

</html>