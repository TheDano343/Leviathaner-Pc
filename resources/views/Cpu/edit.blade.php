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
                            Editar Cpu
                    <a class="btn btn-danger float-end" href="{{url('cpu')}}">Regresar</a>
                        </h4>
                    </div>
                    <div class="card-body">
    <form action="{{route('cpu.update', ['cpu'=>$cpu])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label>Nombre del producto</label>
            <input type="text" class="form-control" name="Nombre_del_producto" value="{{$cpu->Nombre_del_producto}}">
        </div>

        <div class="mb-3">
            <label>Dispositivos compatibles</label>
            <input type="text" class="form-control" name="Fabricante_del_cpu" value="{{$cpu->Fabricante_del_cpu}}">
        </div>

        <div class="mb-3">
            <label>Tegnologia de conectividad</label>
            <input type="text" class="form-control" name="Modelo_del_cpu" value="{{$cpu->Modelo_del_cpu}}">
        </div>

        <div class="mb-3">
            <label>Descripcion del teclado</label>
            <input type="text" class="form-control" name="Velocidad_del_cpu" value="{{$cpu->Velocidad_del_cpu}}">
        </div>

        <div class="mb-3">
            <label>Descripcion</label>
            <input type="text" class="form-control" name="Descripcion" value="{{$cpu->Descripcion}}">
        </div>

        <div class="mb-3">
        <label>Portada</label>
        <input type="file" class="form-control" name="Portada" value="{{$cpu->Portada}}">
        <img src="{{asset('storage/'.$cpu->Portada)}}" alt="image" class="rounded-circle" width="50" height="50">
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