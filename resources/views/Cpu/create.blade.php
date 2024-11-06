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

    <h4>Agregar un CPU
    <a class="btn btn-danger float-end" href="{{url('cpu')}}">Regresar</a>
    </h4>
    <form action="{{route('cpu.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="mb-3">
            <label>Nombre del producto</label>
            <input type="text" class="form-control" name="Nombre_del_producto">
        </div>

        <div class="mb-3">
            <label>Dispositivos compatibles</label>
            <input type="text" class="form-control" name="Fabricante_del_cpu">
        </div>

        <div class="mb-3">
            <label>Tegnologia de conectividad</label>
            <input type="text" class="form-control" name="Modelo_del_cpu">
        </div>

        <div class="mb-3">
            <label>Descripcion del teclado</label>
            <input type="text" class="form-control" name="Velocidad_del_cpu">
        </div>

        <div class="mb-3">
            <label>Descripcion</label>
            <input type="text" class="form-control" name="Descripcion">
        </div>

        <div class="mb-3">
        <label>Portada</label>
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

