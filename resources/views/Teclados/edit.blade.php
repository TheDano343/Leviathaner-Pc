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
                            Editar teclados
                    <a class="btn btn-danger float-end" href="{{url('teclado')}}">Regresar</a>
                        </h4>
                    </div>
                    <div class="card-body">
    <form action="{{route('teclado.update', ['teclado'=>$teclado])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label>Nombre del producto</label>
            <input type="text" class="form-control" name="Nombre_del_producto" value="{{$teclado->Nombre_del_producto}}">
        </div>

        <div class="mb-3">
            <label>Dispositivos compatibles</label>
            <input type="text" class="form-control" name="Dispositivos_compatibles" value="{{$teclado->Dispositivos_compatibles}}">
        </div>

        <div class="mb-3">
            <label>Tegnologia de conectividad</label>
            <input type="text" class="form-control" name="Tegnologia_de_conectividad" value="{{$teclado->Tegnologia_de_conectividad}}">
        </div>

        <div class="mb-3">
            <label>Descripcion del teclado</label>
            <input type="text" class="form-control" name="Descripcion_del_teclado"
                value="{{$teclado->Descripcion_del_teclado}}">
        </div>

        <div class="mb-3">

        <label>Usos recomendados para producto</label>
            <input type="text" class="form-control" name="Usos_recomendados_para_producto" value="{{$teclado->Usos_recomendados_para_producto}}">
        </div>

        <div class="mb-3">

        <label>Caracteristica especial</label>
            <input type="text" class="form-control" name="Caracteristica_especial" value="{{$teclado->Caracteristica_especial}}">
        </div>

        <div class="mb-3">

        <label>Color</label>
            <input type="text" class="form-control" name="Color" value="{{$teclado->Color}}">
        </div>

        <div class="mb-3">
            <label>Descripcion</label>
            <input type="text" class="form-control" name="Descripcion" value="{{$teclado->Descripcion}}">
        </div>

        <div class="mb-3">
        <label>Imagen</label>
         <input type="file" class="form-control" name="Portada">
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