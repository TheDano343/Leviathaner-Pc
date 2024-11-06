@extends('layouts.admin')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
<div class="card-header">
<h4>
        Crear alimentacion 
        <a class="btn btn-danger float-end" href="{{url('alimentacion')}}">Regresar</a>
    </h4>
</div>

<div class="card-body">
    <form action="{{route('alimentacion.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('post')

    <div class="mb-3">
    <label>Nombre del producto</label>
    <input type="text" class="form-control" name="Nombre_producto">
    </div>

    <div class="mb-3">
    <label>Nombre del modelo</label>
    <input type="text" class="form-control" name="Nombre_modelo">
    </div>

    <div class="mb-3">
    <label>Marca</label>
    <input type="text" class="form-control" name="Marca">
    </div>

    <div class="mb-3">
    <label>Dispositivos compatibles</label>
    <input type="text" class="form-control" name="Dispositivos_compatibles">
    </div>

    <div class="mb-3">
    <label>Tipo conector</label>
    <input type="text" class="form-control" name="Tipo_conector">
    </div>

    <div class="mb-3">
    <label>Potencia de salida</label>
    <input type="text" class="form-control" name="Potencia_de_salida">

    <div class="mb-3">
    <label>Factor de forma</label>
    <input type="text" class="form-control" name="Factor_de_forma">
    </div>

    <div class="mb-3">
    <label>Voltaje</label>
    <input type="text" class="form-control" name="Voltaje">
    </div>

    <div class="mb-3">
    <label>Metodo de enfriamiento</label>
    <input type="text" class="form-control" name="Metodo_de_enfriamiento">
    </div>

    <div class="mb-3">
    <label>Dimensiones de articulo</label>
    <input type="text" class="form-control" name="Dimensiones_de_articulo">
    </div>

    <div class="mb-3">
    <label>Largo y ancho</label>
    <input type="text" class="form-control" name="Largo_y_ancho">
    </div>

    <div class="mb-3">
    <label>Peso del producto</label>
    <input type="text" class="form-control" name="Peso_del_producto">
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

    </form>
    </div>
    </div>
    </div>
    </div>
@endsection
</body>

</html>