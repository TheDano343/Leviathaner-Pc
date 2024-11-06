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
                    Procesador
                    <a class="btn btn-primary float-end" href="{{url('procesador/create')}}">Agregar un procesador</a>
                </h4>
            </div>
            <table class="table table-responsive table-hover">
    <tr>
        <th>Id</th>
        <th>Nombre del producto</th>
        <th>Marca</th>
        <th>Fabricante del CPU</th>
        <th>Modelo del CPU</th>
        <th>Velocidad del CPU</th>
        <th>Enchufe del CPU</th>
        <th>Descripcion</th>
        <th>Precio</th>

    </tr>
    @foreach($procesadores as $procesador)
    <tr>
    <td>{{$procesador->idProcesador}}</td>
    <td>{{$procesador->Nombre_del_producto}}</td>
    <td>{{$procesador->Marca}}</td>
    <td>{{$procesador->Fabricante_del_CPU}}</td>
    <td>{{$procesador->Modelo_del_CPU}}</td>
    <td>{{$procesador->Velocidad_del_CPU}}</td>
    <td>{{$procesador->Enchufe_del_CPU}}</td>
    <td>{{$procesador->Descripcion}}</td>
    <td><img src="{{asset('storage').'/'.$procesador->Portada}}" alt="image" class="rounded-circle" width="50" height="50"></td>

    
    
    <td>
            <th><a class="btn btn-warning" href="{{route('procesador.edit', ['procesador'=>$procesador])}}">Editar</a></th>
    </td>   

    <td>
        <th>
            <form action="{{route('procesador.destroy', ['procesador'=>$procesador])}}" method="post">
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
                    {{ $procesadores->links('pagination::bootstrap-5') }}
                </div> 
            </div>
        </div>
    </div>
    </div>
@endsection

</body>
</html>


