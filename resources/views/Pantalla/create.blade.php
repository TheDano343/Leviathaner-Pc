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

    <h4>Crear una pantalla
    <a class="btn btn-danger float-end" href="{{url('pantalla')}}">Regresar</a>
    </h4>
<form action="{{route('pantalla.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('post')
            
            <div class="mb-3">
                <label>Nombre del producto</label>
            <input class="form-control" type="text" name="Nombre_del_producto">
            </div>
    
            <div class="mb-3">
                <label>Resolucion</label>
            <input class="form-control" type="text" name="Resolucion">
            </div>
    
            <div class="mb-3">
                <label>Tamaño de la pantalla</label>
            <input class="form-control" type="text" name="Tamaño_de_la_pantalla">
            </div>
    
            <div class="mb-3">
                <label>Descripcion de la superficie de la pantalla</label>
            <input class="form-control" type="text" name="Descripcion_de_la_superficie_de_la_pantalla">
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