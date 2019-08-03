@extends("theme.$theme.layout")
@section('title')
    Usuario
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Usuarios</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Id Usuario</th>
                            <th>Nickname</th>
                            <th>Nombre</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Rol</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                          <tr>
                              <td>{{$usuario->idUsuario}}</td>
                              <td>{{$usuario->nickname}}</td>
                              <td>{{$usuario->nombre}}</td>
                              <td>{{$usuario->apellidoPaterno}}</td>
                              <td>{{$usuario->apellidoMaterno}}</td>
                              <td>{{$usuario->rol}}</td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection