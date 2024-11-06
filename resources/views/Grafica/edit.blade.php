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
                <div class="card">

                    <div class="card-header">
                        <h4>Editar Tarjeta Grafica
        <a class="btn btn-danger float-end" href="{{url('grafica')}}">Regresar</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('grafica.update',['grafica'=>$grafica])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label>Nombre del producto</label>
                                <input type="text" class="form-control" name="Nombre_del_producto"
                                    value="{{$grafica->Nombre_del_producto}}">
                            </div>

                            <div class="mb-3">
                                <label>Coprocesador</label>
                                <input type="text" class="form-control" name="Coprocesador"
                                    value="{{$grafica->Coprocesador}}">
                            </div>

                            <div class="mb-3">
                                <label>Marca</label>
                                <input type="text" class="form-control" name="Marca" value="{{$grafica->Marca}}">
                            </div>

                            <div class="mb-3">
                                <label>Ram</label>
                                <input type=number class="form-control" name="Ram_para_graficos" value="{{$grafica->Ram_para_graficos}}">
                            </div>

                            <div class="mb-3">
                                <label>Descripcion</label>
                                <input type="text" class="form-control" name="Descripcion"
                                    value="{{$grafica->Descripcion}}">
                            </div>

                            <div class="mb-3">
                            <label>Imagen</label>
                            <input type="file" class="form-control" name="Portada">
                            <img src="{{asset('storage/'.$grafica->Portada)}}" alt="image" class="rounded-circle" width="50" height="50">
        |                   </div>
                            
                            <button class="btn btn-primary" type="submit">Actualizar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

</body>

</html>