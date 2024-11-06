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

    <h4>Agregar un procesador
    <a class="btn btn-danger float-end" href="{{url('procesador')}}">Regresar</a>
    </h4>
<form action="{{route('procesador.store')}}" method="post" enctype="multipart/form-data">
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
            <label>Fabricante del CPU</label>
            <input type="text" class="form-control" name="Fabricante_del_CPU">
            </div>
           
            <div class="mb-3">
            <label>Modelo del CPU</label>
            <input type="text" class="form-control" name="Modelo_del_CPU">
            </div>
            
            <div class="mb-3">
            <label>Velocidad el CPU</label>
            <input type="text" class="form-control" name="Velocidad_del_CPU">
            </div>

            <div class="mb-3">
            <label>Enchufe del CPU</label>
            <input type="text" class="form-control" name="Enchufe_del_CPU">
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