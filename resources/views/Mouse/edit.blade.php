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
                        <h4>
                            Editar Mouse
                    <a class="btn btn-danger float-end" href="{{url('mouse')}}">Regresar</a>
                        </h4>
                    </div>
                    <div class="card-body">
        <form action="{{route('mouse.update', ['mouse'=>$mouse])}}" method="post" enctype="multipart/form-data">
         @csrf
         @method('PUT')
            <div class="mb-3">
                <label>Nombre del producto</label>
            <input type="text" class="form-control" name="Nombre_del_producto" value="{{$mouse->Nombre_del_producto}}">
            </div>

            <div class="mb-3">
                <label>Marca</label>
            <input type="text" class="form-control" name="Marca" value="{{$mouse->Marca}}">
            </div>

            <div class="mb-3">
                <label>Tipo de conectividad</label>
            <input type="text" class="form-control" name="Tipo_de_conectividad" value="{{$mouse->Tipo_de_conectividad}}">
            </div>

            <div class="mb-3">
                <label>Tecnologia de deteccion de movimiento</label>
            <input type="text" class="form-control" name="Tecnologia_de_deteccion_de_movimiento" value="{{$mouse->Tecnologia_de_deteccion_de_movimiento}}">
            </div>

            <div class="mb-3">
                <label>Descripcion</label>
            <input type="text" class="form-control" name="Descripcion" value="{{$mouse->Descripcion}}">
            </div>

            <div class="mb-3">
                            <label>Imagen</label>
                            <input type="file" class="form-control" name="Portada">
            <img src="{{asset('storage/'.$mouse->Portada)}}" alt="image" class="rounded-circle" width="50" height="50">

                            </div>


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