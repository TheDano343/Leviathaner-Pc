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

                        <h4>Agregar refrigeracion
                            <a class="btn btn-danger float-end" href="{{url('refrigeracion')}}">Regresar</a>
                        </h4>

                        <form action="{{route('refrigeracion.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="mb-3">
                                <label>Nombre del producto</label>
                                <input type="text" class="form-control" name="Nombre_del_producto">
                            </div>

                            <div class="mb-3">
                                <label>Dimensiones del producto</label>
                                <input type="text" class="form-control" name="Dimensiones_del_producto">
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
                                <label>Dispositivos compatibles</label>
                                <input type="text" class="form-control" name="Dispositivos_compatibles">
                            </div>

                            <div class="mb-3">
                                <label>Nivel de ruido</label>
                                <input type="text" class="form-control" name="Nivel_de_ruido">
                            </div>

                            <div class="mb-3">
                                <label>Material</label>
                                <input type="text" class="form-control" name="Material">
                            </div>

                            <div class="mb-3">
                                <label>Velocidad maxima de rotacion</label>
                                <input type="text" class="form-control" name="Velocidad_maxima_de_rotacion">
                            </div>

                            <div class="mb-3">
                                <label>Descripcion</label>
                                <input type="text" class="form-control" name="Descripcion">
                            </div>

                            <div class="mb-3">
                            <label>Imagen</label>
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