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
        Agregar un mouse
        <a class="btn btn-danger float-end" href="{{url('mouse')}}">Regresar</a>
    </h4>
    </div>

<div class="card-body">
<form action="{{route('mouse.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('post')

            <div class="mb-3">
                <label>Nombre del producto</label>
            <input class="form-control" type="text" name="Nombre_del_producto">
            </div>

            <div class="mb-3">
                <label>Marca</label>
            <input class="form-control" type="text" name="Marca">
            </div>

            <div class="mb-3">
                <label>Tipo de conectividad</label>
            <input class="form-control" type="text" name="Tipo_de_conectividad">
            </div>

            <div class="mb-3">
                <label>Tecnologia de deteccion de movimiento</label>
            <input class="form-control" type="text" name="Tecnologia_de_deteccion_de_movimiento">
            </div>

            <div class="mb-3">
                <label>Descripcion</label>
            <input class="form-control" type="text" name="Descripcion">
            </div>

            <div class="mb-3">
            <label>Imagen</label>
            <input type="file" class="form-control" name="Portada">
            </div>


            <button class="btn btn-primary" type="submit">Crear</button>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
@endsection
</body>
</html>