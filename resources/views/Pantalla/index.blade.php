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
                    Pantallas
                    <a class="btn btn-primary float-end" href="{{url('pantalla/create')}}">Agregar una pantalla</a>
                </h4>
            </div>
            <table class="table table-responsive table-hover">
    <tr>
        <th>Id</th>
        <th>Nombre del producto</th>
        <th>Resolucion</th>
        <th>Tamaño de la pantalla</th>
        <th>Descripcion de la superficie de la pantalla</th>
        <th>Descripcion</th>
        <th>Precio</th>

    </tr>
    @foreach($pantallas as $pantalla)
    <tr>
    <td>{{$pantalla->idPantallas }}</td>
    <td>{{$pantalla->Nombre_del_producto}}</td>
    <td>{{$pantalla->Resolucion}}</td>
    <td>{{$pantalla->Tamaño_de_la_pantalla}}</td>
    <td>{{$pantalla->Descripcion_de_la_superficie_de_la_pantalla}}</td>
    <td>{{$pantalla->Descripcion}}</td>
    <td><img src="{{asset('storage/'.$pantalla->Portada)}}" alt="image" class="rounded-circle" width="50" height="50"></td>

    <td>
            <th>
                <a class="btn btn-warning" href="{{route('pantalla.edit', ['pantalla'=>$pantalla])}}">Editar</a>
            </th>
    </td>   

    <td>
        <th>
            <form action="{{route('pantalla.destroy', ['pantalla'=>$pantalla])}}" method="post">
                @csrf
                @method('delete')
                <input class="btn btn-danger" type="submit" value="Eliminar"/>
            </form>
        </th>
    </td>
    
    
    </tr>
    @endforeach
    </table>
    <div>
                    {{ $pantallas->links('pagination::bootstrap-5') }}
                </div> 
            </div>
        </div>
    </div>
    </div>
@endsection

</body>
</html>


