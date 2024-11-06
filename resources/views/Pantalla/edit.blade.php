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
                            Editar pantalla
                    <a class="btn btn-danger float-end" href="{{url('pantalla')}}">Regresar</a>
                        </h4>
                    </div>
                    <div class="card-body">
<form action="{{route('pantalla.update',['pantalla'=>$pantalla])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
            <label>Nombre del producto</label>
            <input type="text" class="form-control" name="Nombre_del_producto" value="{{$pantalla->Nombre_del_producto}}">
            </div>

            <div class="mb-3">
            <label>Resolucion</label>
            <input type="text" class="form-control" name="Resolucion" value="{{$pantalla->Resolucion}}">
            </div>

            <div class="mb-3">
            <label>Tamaño de la pantalla</label>
            <input type="text" class="form-control" name="Tamaño_de_la_pantalla" value="{{$pantalla->Tamaño_de_la_pantalla}}">
            </div>

            <div class="mb-3">
            <label>Descripcion de la superficie de la pantalla</label>
            <input type="text" class="form-control" name="Descripcion_de_la_superficie_de_la_pantalla" value="{{$pantalla->Descripcion_de_la_superficie_de_la_pantalla}}">
            </div>

            <div class="mb-3">
            <label>Descripcion</label>
            <input type="text" class="form-control" name="Descripcion" value="{{$pantalla->Descripcion}}">
            </div>

            <div class="mb-3">
                            <label>Imagen</label>
                            <input type="file" class="form-control" name="Portada">
            <img src="{{asset('storage/'.$pantalla->Portada)}}" alt="image" class="rounded-circle" width="50" height="50">

                            </div>


            <button class="btn btn-primary" type="submit">Actualizar</button>
        </div>
        </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

</body>

</html>