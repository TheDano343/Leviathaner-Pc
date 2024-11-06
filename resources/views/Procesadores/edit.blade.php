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
                            Editar procesador
                    <a class="btn btn-danger float-end" href="{{url('procesador')}}">Regresar</a>
                        </h4>
                    </div>
                    <div class="card-body">
<form action="{{route('procesador.update', ['procesador'=>$procesador])}}" method="post">
    @csrf
    @method('put')
            <div class="mb-3">
            <label>Nombre del producto</label>
            <input type="text" class="form-control" name="Nombre_del_producto" value="{{$procesador->Nombre_del_producto}}">
            </div>
           
            <div class="mb-3">
            <label>Marca</label>
            <input type="text" class="form-control" name="Marca" value="{{$procesador->Marca}}">
            </div>

            <div class="mb-3">
            <label>Fabricante del CPU</label>
            <input type="text" class="form-control" name="Fabricante_del_CPU" value="{{$procesador->Fabricante_del_CPU}}">
            </div>

            <div class="mb-3">
            <label>Modelo del CPU</label>
            <input type="text" class="form-control" name="Modelo_del_CPU" value="{{$procesador->Modelo_del_CPU}}">
            </div>

            <div class="mb-3">
            <label>Velocidad del CPU</label>
            <input type="text" class="form-control" name="Velocidad_del_CPU" value="{{$procesador->Velocidad_del_CPU}}">
            </div>

            <div class="mb-3">
            <label>Enchufe del CPU</label>
            <input type="text" class="form-control"  name="Enchufe_del_CPU" value="{{$procesador->Enchufe_del_CPU}}">
            </div>

            <div class="mb-3">
            <label>Descripcion</label>
            <input type="text" class="form-control" name="Descripcion" value="{{$procesador->Descripcion}}">
            </div>

            <div class="mb-3">
                            <label>Imagen</label>
                            <input type="file" class="form-control" name="Portada">
            <img src="{{asset('storage/'.$procesador->Portada)}}" alt="image" class="rounded-circle" width="50" height="50">
                           
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