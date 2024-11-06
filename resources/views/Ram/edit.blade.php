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
                            Editar ram
                    <a class="btn btn-danger float-end" href="{{url('ram')}}">Regresar</a>
                        </h4>
                    </div>
                    <div class="card-body">
<form action="{{route('ram.update', ['ram'=>$ram] )}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
            <div class="mb-3">
                <label>Nombre del producto</label>
            <input type="text" class="form-control" name="Nombre_del_producto" value="{{$ram->Nombre_del_producto}}">
            </div>
            
            <div class="mb-3">
                <label>Marca</label>
            <input type="text" class="form-control" name="Marca" value="{{$ram->Marca}}">
            </div>
           
            <div class="mb-3">
                <label>Tegnologia de la memoria ram</label>
            <input type="text" class="form-control" name="Tegnologia_de_la_memoria_ram" value="{{$ram->Tegnologia_de_la_memoria_ram}}">
            </div>
            
            <div class="mb-3">
                <label>Tamaño de la memoria</label>
            <input type="text" class="form-control" name="Tamaño_de_la_memoria" value="{{$ram->Tamaño_de_la_memoria}}">
            </div>
            
            <div class="mb-3">
                <label>Velocidad de memoria</label>
            <input type="text" class="form-control" name="Velocidad_de_memoria" value="{{$ram->Velocidad_de_memoria}}">
            </div>
            
            <div class="mb-3"
            ><label>Dispositivos compatibles</label>
            <input type="text" class="form-control" name="Dispositivos_compatibles" value="{{$ram->Dispositivos_compatibles}}">
            </div>
           
            <div class="mb-3">
                <label>Descripcion</label>
            <input type="text" class="form-control" name="Descripcion" value="{{$ram->Descripcion}}">
            </div>

            <div class="mb-3">
            <label>Imagen</label>
            <input type="file" class="form-control" name="Portada">
            <img src="{{asset('storage/'.$ram->Portada)}}" alt="image" class="rounded-circle" width="50" height="50">
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