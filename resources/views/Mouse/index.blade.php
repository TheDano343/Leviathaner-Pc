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
                    Mouses
                    <a class="btn btn-primary float-end" href="{{url('mouse/create')}}">Agregar un mouse</a>
                </h4>
            </div>
            <table class="table table-responsive table-hover">
    <tr>
        <th>Id</th>
        <th>Nombre_del_producto</th>
        <th>Marca</th>
        <th>Tipo_de_conectividad</th>
        <th>Tecnologia_de_deteccion_de_movimiento</th>
        <th>Descripcion</th>
        <th>Precio</th>
    </tr>
    @foreach($mouses as $mouse)
    <tr>
    <td>{{$mouse->idMouse }}</td>
    <td>{{$mouse->Nombre_del_producto}}</td>
    <td>{{$mouse->Marca}}</td>
    <td>{{$mouse->Tipo_de_conectividad}}</td>
    <td>{{$mouse->Tecnologia_de_deteccion_de_movimiento}}</td>
    <td>{{$mouse->Descripcion}}</td>
    <td><img src="{{asset('storage/'.$mouse->Portada)}}" alt="image" class="rounded-circle" width="50" height="50"></td>

    <td>
            <th>
            <a class="btn btn-warning"
            href="{{route('mouse.edit', ['mouse'=>$mouse])}}">Editar</a>
        </th>
    </td>   

    <td>
        <th>
            <form action="{{route('mouse.destroy', ['mouse'=>$mouse])}}" method="post">
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
                    {{ $mouses->links('pagination::bootstrap-5') }}
                </div> 
            </div>
        </div>
    </div>
    </div>
@endsection

</body>
</html>


