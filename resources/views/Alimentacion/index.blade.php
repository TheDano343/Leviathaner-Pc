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
                        Alimentacion
                        <a class="btn btn-primary float-end" href="{{url('alimentacion/create')}}">Agregar fuente de alimentación</a>
                    </h4>
                </div>
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre_del_producto</th>
                            <th>Nombre_modelo</th>
                            <th>Marca</th>
                            <th>Dispositivos_compatibles</th>
                            <th>Tipo_conector</th>
                            <th>Potencia_de_salida</th>
                            <th>Factor_de_forma</th>
                            <th>Voltaje</th>
                            <th>Metodo_de_enfriamiento</th>
                            <th>Dimensiones_de_articulo</th>
                            <th>Largo_y_ancho</th>
                            <th>Peso_del_producto</th>
                            <th>Descripcion</th>
                            <th>Portada</th>

                        </tr>
                    </thead>
                    @foreach($alimentaciones as $alimentacion)
                    <tr>
                        <td>{{$alimentacion->idAlimentacion}}</td>
                        <td>{{$alimentacion->Nombre_producto}}</td>
                        <td>{{$alimentacion->Nombre_modelo}}</td>
                        <td>{{$alimentacion->Marca}}</td>
                        <td>{{$alimentacion->Dispositivos_compatibles}}</td>
                        <td>{{$alimentacion->Tipo_conector}}</td>
                        <td>{{$alimentacion->Potencia_de_salida}}</td>
                        <td>{{$alimentacion->Factor_de_forma}}</td>
                        <td>{{$alimentacion->Voltaje}}</td>
                        <td>{{$alimentacion->Metodo_de_enfriamiento}}</td>
                        <td>{{$alimentacion->Dimensiones_de_articulo}}</td>
                        <td>{{$alimentacion->Largo_y_ancho}}</td>
                        <td>{{$alimentacion->Peso_del_producto}}</td>
                        <td>{{$alimentacion->Descripcion}}</td>
                        <td><img src="{{asset('storage/'.$alimentacion->Portada)}}" alt="image" class="rounded-circle" width="50" height="50"></td>

                        
                        <td>
                        <th>
                        <a class="btn btn-warning"
                         href="{{route('alimentacion.edit', ['alimentacion' => $alimentacion])}}">Editar</a>
                         </th>
                        </td>

                        <td>
                            <th>
                            <form action="{{ route('alimentacion.destroy',['alimentacion'=>$alimentacion])}}" method="post">
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
                {{ $alimentaciones->links('pagination::bootstrap-5') }}
            </div> 
            </div>
        </div>
    </div>
    </div>

    @endsection
</body>

</html>