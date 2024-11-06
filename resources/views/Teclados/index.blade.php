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
                        Teclado
                        <a class="btn btn-primary float-end" href="{{url('teclado/create')}}">Agregar teclado</a>
                    </h4>
                </div>
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
        <th>Id</th>
        <th>Nombre del producto</th>
        <th>Dispositivos compatibles</th>
        <th>Tegnologia de conectividad</th>
        <th>Descripcion del teclado</th>
        <th>Usos recomendados para producto</th>
        <th>Caracteristica especial</th>
        <th>Color</th>
        <th>Descripcion</th>
        <th>Precio</th>

    </tr>
    </thead>
            @foreach($teclados as $teclado)
            <tr>
                <td>{{$teclado->idTeclado}}</td>
                <td>{{$teclado->Nombre_del_producto}}</td>
                <td>{{$teclado->Dispositivos_compatibles}}</td>
                <td>{{$teclado->Tegnologia_de_conectividad}}</td>
                <td>{{$teclado->Descripcion_del_teclado}}</td>
                <td>{{$teclado->Usos_recomendados_para_producto}}</td>
                <td>{{$teclado->Caracteristica_especial}}</td>
                <td>{{$teclado->Color}}</td>
                <td>{{$teclado->Descripcion}}</td>
                <td><img src="{{asset('storage/'.$teclado->Portada)}}" alt="image" class="rounded-circle" width="50" height="50"></td>

                <td>
                <th><a class="btn btn-warning" href="{{ route('teclado.edit',['teclado'=>$teclado])}}">Editar</a></th>
                </td>

                <td>
                    <th>
                    <form action="{{ route('teclado.destroy',['teclado'=>$teclado])}}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Eliminar" />
                        </th>
                        </form>
            </th>
    </td>
    
    
    </tr>
    @endforeach
    </table>
    <div>
                    {{ $teclados->links('pagination::bootstrap-5') }}
                </div> 
</div>
</div>
</div>
</div>

@endsection
</body>

</html>