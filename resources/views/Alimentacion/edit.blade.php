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
        Editar alimentacion 
        <a class="btn btn-danger float-end" href="{{url('alimentacion')}}">Regresar</a>
    </h4>
</div>

<div class="card-body">
    <form action="{{route('alimentacion.update', ['alimentacion'=>$alimentacion])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="mb-3">
    <label>Nombre del producto</label>
    <input type="text" class="form-control" name="Nombre_producto" value="{{$alimentacion->Nombre_producto}}">
    </div>

    <div class="mb-3">
    <label>Nombre del modelo</label>
    <input type="text" class="form-control" name="Nombre_modelo" value="{{$alimentacion->Nombre_modelo}}">
    </div>

    <div class="mb-3">
    <label>Marca</label>
    <input type="text" class="form-control" name="Marca" value="{{$alimentacion->Marca}}">
    </div>

    <div class="mb-3">
    <label>Dispositivos compatibles</label>
    <input type="text" class="form-control" name="Dispositivos_compatibles" value="{{$alimentacion->Dispositivos_compatibles}}">
    </div>

    <div class="mb-3">
    <label>Tipo conector</label>
    <input type="text" class="form-control" name="Tipo_conector" value="{{$alimentacion->Tipo_conector}}">
    </div>

    <div class="mb-3">
    <label>Potencia de salida</label>
    <input type="text" class="form-control" name="Potencia_de_salida" value="{{$alimentacion->Potencia_de_salida}}">

    <div class="mb-3">
    <label>Factor de forma</label>
    <input type="text" class="form-control" name="Factor_de_forma" value="{{$alimentacion->Factor_de_forma}}">
    </div>

    <div class="mb-3">
    <label>Voltaje</label>
    <input type="text" class="form-control" name="Voltaje" value="{{$alimentacion->Voltaje}}">
    </div>

    <div class="mb-3">
    <label>Metodo de enfriamiento</label>
    <input type="text" class="form-control" name="Metodo_de_enfriamiento" value="{{$alimentacion->Metodo_de_enfriamiento}}">
    </div>

    <div class="mb-3">
    <label>Dimensiones de articulo</label>
    <input type="text" class="form-control" name="Dimensiones_de_articulo" value="{{$alimentacion->Dimensiones_de_articulo}}">
    </div>

    <div class="mb-3">
    <label>Largo y ancho</label>
    <input type="text" class="form-control" name="Largo_y_ancho" value="{{$alimentacion->Largo_y_ancho}}">
    </div>

    <div class="mb-3">
    <label>Peso del producto</label>
    <input type="text" class="form-control" name="Peso_del_producto" value="{{$alimentacion->Peso_del_producto}}">
    </div>

    <div class="mb-3">
    <label>Descripcion</label>
    <input type="text" class="form-control" name="Descripcion" value="{{$alimentacion->Descripcion}}">
    </div>


    <div class="mb-3">
    <label>Portada</label>
    <input type="file" class="form-control" name="Portada" value="{{$alimentacion->Portada}}">
    <img src="{{asset('storage/'.$alimentacion->Portada)}}" alt="image" class="rounded-circle" width="50" height="50">
    </div>



    <button class="btn btn-primary" type="submit">Actualizar</button>

    </form>
    </div>
    </div>
    </div>
    </div>
@endsection
</body>

</html>