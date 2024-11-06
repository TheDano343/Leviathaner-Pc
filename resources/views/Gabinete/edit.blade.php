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
    <h4>Editar gabinete
    <a class="btn btn-danger float-end" href="{{url('gabinete')}}">Regresar</a>
    </h4>
    
</div>

<div class="card-body">
    <form action="{{route('gabinete.update', ['gabinete'=>$gabinete])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
        <label>Nombre del producto</label>
            <input type="text" class="form-control"  name="Nombre_del_producto" value="{{$gabinete->Nombre_del_producto}}">
        </div>

        <div class="mb-3">
            <label>Marca</label>
            <input type="text" class="form-control" name="Marca" value="{{$gabinete->Marca}}">
        </div>

        <div class="mb-3">
        <label>Tipo de estuche</label>
            <input type="text" class="form-control" name="Tipo_de_estuche" value="{{$gabinete->Tipo_de_estuche}}">
        </div>

        <div class="mb-3">
            <label>Usos recomendados para el producto</label>
            <input type="text" class="form-control" name="Usos_recomendados_para_el_producto"
            value="{{$gabinete->Usos_recomendados_para_el_producto}}">
        </div>

        <div class="mb-3">
        <label>Color</label>
        <input type="text" class="form-control" name="Color" value="{{$gabinete->Color}}">
        </div>

        <div class="mb-3">
            <label>Material</label>
            <input type="text" class="form-control" name="Material" value="{{$gabinete->Material}}">
        </div>

        <div class="mb-3">
        <label>Metodo de enfriamiento</label>
            <input type="text" class="form-control" name="Metodo_de_enfriamiento" value="{{$gabinete->Metodo_de_enfriamiento}}">
        </div>

        <div class="mb-3">
            <label>Nombre del modelo</label>
            <input type="text" class="form-control" name="Nombre_del_modelo" value="{{$gabinete->Nombre_del_modelo}}">
        </div>

        <div class="mb-3">
        <label>Luces de colores</label>
            <input type="text" class="form-control" name="Luces_de_colores" value="{{$gabinete->Luces_de_colores}}">
        </div>

        <div class="mb-3">
            <label>Tamañp de ventilador</label>
            <input type="number" class="form-control" name="Tamaño_de_ventilador" value="{{$gabinete->Tamaño_de_ventilador}}">
        </div>

        <div class="mb-3">
            <label>Descripcion</label>
            <input type="text" class="form-control" name="Descripcion" value="{{$gabinete->Descripcion}}">
        </div>

        <div class="mb-3">
            <label>Imagen</label>
            <input type="file" class="form-control" name="Portada">
            <img src="{{asset('storage/'.$gabinete->Portada)}}" alt="image" class="rounded-circle" width="50" height="50">
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