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
                        Refrigeracion
                        <a class="btn btn-primary float-end" href="{{url('refrigeracion/create')}}">Agregar refrigeracion</a>
                    </h4>
                </div>
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
        <th>Id</th>
        <th>Nombre del producto</th>
        <th>Dimensiones del producto</th>
        <th>Voltaje</th>
        <th>Vataje</th>
        <th>Metodo de enfriamiento</th>
        <th>Dispositivos compatibles</th>
        <th>Nivel de ruido</th>
        <th>Material</th>
        <th>Velocidad maxima de rotacion</th>
        <th>Descripcion</th>
        <th>Precio</th>

    </tr>
    </thead>
    @foreach($refrigeraciones as $refrigeracion)
    <tr>
    <td>{{$refrigeracion->idSistema_refrigeracion}}</td>
    <td>{{$refrigeracion->Nombre_del_producto}}</td>
    <td>{{$refrigeracion->Dimensiones_del_producto}}</td>
    <td>{{$refrigeracion->Voltaje}}</td>
    <td>{{$refrigeracion->Vataje}}</td>
    <td>{{$refrigeracion->Metodo_de_enfriamiento}}</td>
    <td>{{$refrigeracion->Dispositivos_compatibles}}</td>
    <td>{{$refrigeracion->Nivel_de_ruido}}</td>
    <td>{{$refrigeracion->Material}}</td>
    <td>{{$refrigeracion->Velocidad_maxima_de_rotacion}}</td>
    <td>{{$refrigeracion->Descripcion}}</td>
    <td><img src="{{asset('storage/'.$refrigeracion->Portada)}}" alt="image" class="rounded-circle" width="50" height="50"></td>

    
    
    <td>
            <th><a class="btn btn-warning" href="{{route('refrigeracion.edit', ['refrigeracion'=>$refrigeracion])}}">Editar</a></th>
    </td>   

    <td>
        <th>
            <form action="{{route('refrigeracion.destroy', ['refrigeracion'=>$refrigeracion])}}" method="post">
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
                    {{ $refrigeraciones->links('pagination::bootstrap-5') }}
                </div> 
</div>
</div>
</div>
</div>

@endsection
</body>

</html>

