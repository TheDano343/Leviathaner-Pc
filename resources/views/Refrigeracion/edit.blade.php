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
                            Editar refrigeracion
                    <a class="btn btn-danger float-end" href="{{url('refrigeracion')}}">Regresar</a>
                        </h4>
                    </div>
                    <div class="card-body">
<form action="{{route('refrigeracion.update', ['refrigeracion'=>$refrigeracion])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
            <div class="mb-3">
            <label>Nombre del producto</label>
            <input type="text" class="form-control" name="Nombre_del_producto" value="{{$refrigeracion->Nombre_del_producto}}">
            </div>
            
            <div class="mb-3">
            <label>Dimensiones del producto</label>
            <input type="text" class="form-control" name="Dimensiones_del_producto" value="{{$refrigeracion->Dimensiones_del_producto}}">
            </div>
            
            <div class="mb-3">
            <label>Voltaje</label>
            <input type="text" class="form-control" name="Voltaje" value="{{$refrigeracion->Voltaje}}">
            </div>
            
            
            
            <div class="mb-3">
            <label>Metodo de enfriamiento</label>
            <input type="text" class="form-control" name="Metodo_de_enfriamiento" value="{{$refrigeracion->Metodo_de_enfriamiento}}">
        </div>
            
            <div class="mb-3">
            <label>Dispositivos compatibles</label>
            <input type="text" class="form-control" name="Dispositivos_compatibles" value="{{$refrigeracion->Dispositivos_compatibles}}">
        </div>
            
            <div class="mb-3">
            <label>Nivel de ruido</label>
            <input type="text" class="form-control" name="Nivel_de_ruido" value="{{$refrigeracion->Nivel_de_ruido}}">
        </div>
           
            <div class="mb-3">
            <label>Material</label>
            <input type="text" class="form-control"  name="Material" value="{{$refrigeracion->Material}}">
        </div>
            
            <div class="mb-3">
            <label>Velocidad maxima de rotacion</label>
            <input type="text" class="form-control" name="Velocidad_maxima_de_rotacion" value="{{$refrigeracion->Velocidad_maxima_de_rotacion}}">
        </div>
            
            <div class="mb-3"> 
            <label>Descripcion</label>    
            <input type="text" class="form-control" name="Descripcion" value="{{$refrigeracion->Descripcion}}">
        </div>

        <div class="mb-3">
        <label>Imagen</label>
        <input type="file" class="form-control" name="Portada">
        <img src="{{asset('storage/'.$refrigeracion->Portada)}}" alt="image" class="rounded-circle" width="50" height="50">
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