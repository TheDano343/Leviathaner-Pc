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
                        Gabinetes
                        <a class="btn btn-primary float-end" href="{{url('gabinete/create')}}">Agregar un gabinete</a>
                    </h4>
                </div>
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>nombre</th>
                            <th>Marca</th>
                            <th>Tipo de estuche</th>
                            <th>Uso recomendado</th>
                            <th>Color</th>
                            <th>Material</th>
                            <th>Metodo de enfriamiento</th>
                            <th>Nombre del modelo</th>
                            <th>Luces de colores</th>
                            <th>Tamaño de ventilador</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    @foreach($gabinetes as $gabinete)
                    <tr>
                        <td>{{$gabinete->idGabinetes}}</td>
                        <td>{{$gabinete->Nombre_del_producto}}</td>
                        <td>{{$gabinete->Marca}}</td>
                        <td>{{$gabinete->Tipo_de_estuche}}</td>
                        <td>{{$gabinete->Usos_recomendados_para_el_producto}}</td>
                        <td>{{$gabinete->Color}}</td>
                        <td>{{$gabinete->Material}}</td>
                        <td>{{$gabinete->Metodo_de_enfriamiento}}</td>
                        <td>{{$gabinete->Nombre_del_modelo}}</td>
                        <td>{{$gabinete->Luces_de_colores}}</td>
                        <td>{{$gabinete->Tamaño_de_ventilador}}</td>
                        <td>{{$gabinete->Descripcion}}</td>
                        <td><img src="{{asset('storage/'.$gabinete->Portada)}}" alt="image" class="rounded-circle" width="50" height="50"></td>


                        <td>
                        <th>
                            <a class="btn btn-warning"
                                href="{{ route('gabinete.edit',['gabinete'=>$gabinete])}}">Editar</a>
                            </th>
                        </td>

                        <td>
                            <th>
                            <form action="{{ route('gabinete.destroy',['gabinete'=>$gabinete])}}" method="post">
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
                    {{ $gabinetes->links('pagination::bootstrap-5') }}
                </div> 
            </div>
        </div>
    </div>
    </div>

    @endsection
</body>

</html>