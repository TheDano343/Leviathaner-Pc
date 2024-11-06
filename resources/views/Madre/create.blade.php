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
        Agregar Tarjeta Madre
        <a class="btn btn-danger float-end" href="{{url('madre')}}">Regresar</a>
    </h4>
    </div>

<div class="card-body">
<form action="{{route('madre.store')}}" method="post" enctype="multipart/form-data">
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
                <label>Enchufe de CPU</label>
            <input type="text" class="form-control" name="Enchufe_de_CPU">
            </div>
        
            <div class="mb-3">
                <label>Dispositivos Compatibles</label>
            <input type="text" class="form-control" name="Dispositivos_Compatibles">
            </div>

            <div class="mb-3">
                <label>Tecnologia de la memoria RAM</label>
            <input type="text" class="form-control" name="Tecnologia_de_la_memoria_RAM">
            </div>

            <div class="mb-3">
                <label>Procesadores Compatibles</label>
            <input type="text" class="form-control" name="Procesadores_Compatibles">
            </div>

            <div class="mb-3">
                <label>Tipo de circuitos integrados</label>
            <input type="text" class="form-control" name="Tipo_de_circuitos_integrados">
            </div>

            <div class="mb-3">
                <label>Velocidad del reloj de la memoria</label>
            <input type="text" class="form-control" name="Velocidad_del_reloj_de_la_memoria">
            </div>

            <div class="mb-3">
                <label>Nombre del modelo</label>
            <input type="text" class="form-control" name="Nombre_del_modelo">
            </div>

            <div class="mb-3">
                <label>Capacidad de almacenamiento de la memoria</label>
            <input type="text" class="form-control" name="Capacidad_de_almacenamiento_de_la_memoria">
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