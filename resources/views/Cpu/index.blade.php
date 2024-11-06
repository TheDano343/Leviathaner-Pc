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
                <div class="card-header">
                    <h4>
                        Cpu
                        <a class="btn btn-primary float-end" href="{{url('cpu/create')}}">Agregar Cpu</a>
                    </h4>
                </div>
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
        <th>Id</th>
        <th>Nombre_del_producto</th>
        <th>Fabricante_del_cpu</th>
        <th>Modelo_del_cpu</th>
        <th>Velocidad_del_cpu</th>
        <th>Descripcion</th>
        <th>Portada</th>


    </tr>
    </thead>
            @foreach($cpus as $cpu)
            <tr>
                <td>{{$cpu->idCpu}}</td>
                <td>{{$cpu->Nombre_del_producto}}</td>
                <td>{{$cpu->Fabricante_del_cpu}}</td>
                <td>{{$cpu->Modelo_del_cpu}}</td>
                <td>{{$cpu->Velocidad_del_cpu}}</td>
                <td>{{$cpu->Descripcion}}</td>
                <td><img src="{{asset('storage/'.$cpu->Portada)}}" alt="image" class="rounded-circle" width="50" height="50"></td>

                <td>
                <th><a class="btn btn-warning" href="{{ route('cpu.edit',['cpu'=>$cpu])}}">Editar</a></th>
                </td>

                <td>
                    <th>
                    <form action="{{ route('cpu.destroy',['cpu'=>$cpu])}}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Eliminar" />
                        </th>
                        </form>
            </th>
    </td>
    
    
    </tr>
    @endforeach
    </table>
    <div>
                    {{ $cpus->links('pagination::bootstrap-5') }}
                </div> 
</div>
</div>
</div>
</div>

@endsection
</body>

</html>