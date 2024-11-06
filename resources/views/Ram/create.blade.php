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

    <h4>Agregar memoria Ram
    <a class="btn btn-danger float-end" href="{{url('ram')}}">Regresar</a>
    </h4>
<form action="{{route('ram.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('post')
            <div class="mb-3">
                <label>Nombre del producto</label>
            <input type="text" class="form-control" name="Nombre_del_producto">
            </div>
            
            <div class="mb-3">
                <label>Marca</label>
            <input type="text" class="form-control" name="Marca">
            </div>
            
            <div class="mb-3">
                <label>Tegnologia de la memoria ram</label>
            <input type="text" class="form-control" name="Tegnologia_de_la_memoria_ram">
            </div>
            
            <div class="mb-3">
                <label>Tamaño de la memoria</label>
            <input type="text" class="form-control" name="Tamaño_de_la_memoria">
            </div>
            
            <div class="mb-3">
                <label>Velocidad de memoria</label>
            <input type="text" class="form-control" name="Velocidad_de_memoria">
            </div>
            
            <div class="mb-3">
                <label>Dispositivos compatibles</label>
            <input type="text" class="form-control" name="Dispositivos_compatibles">
            </div>
            
            <div class="mb-3">
                <label>Descripcion</label>
            <input type="text" class="form-control" name="Descripcion">
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