@extends('layouts.app')
@section('content')
  <!-- Listado de Usuarios -->

  <br>
  <br>
  <br>
  <br>
  @if(!(Auth::User()->is_student))
  <h2 align="center">Panel de Administracion - Alumnos</h2>

  <br>
  
    <div class="row justify-content-center">
      <a href="{{ url('usuario/alta') }}" class="btn btn-success " role="button" aria-pressed="true">Crear Alumno</a>
    </div>
  
  <br>
  <br>

  <table class="table table-hover">
    <theader>
    <tr><th>ID </th><th>Nombre</th><th>Apellido</th><th>DNI</th><th>Email</th><th>Telefono</th><th>Fecha de Nacimiento</th><th>Direccion</th>
    @foreach($users as $user)
      <tr data-id="{{$user->id}}">
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->lastname}}</td>
        <td>{{$user->dni}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->date_birth}}</td>
        <td>{{$user->street}} N°{{$user->number}}</td>
        <td>
          <a href='{{ url('usuario') }}/editar/{{$user->id}}' title="Editar"><i class="fa fa-edit"></i></a>
          <a href='#' title="Eliminar" class="btn-delete"><i class="fa fa-times"></i></a>
        </td>

      </tr>
    @endforeach
  </table>
  
  
  {!! $users->render() !!}
  {!! Form::open(['url' => ['usuario', ':USERS_ID'], 'method' => 'DELETE', 'id' => 'frm_delete' ]) !!}
  {!! Form::close() !!}

@endsection
<!--Se tenia que instalar el FORM en el Composer.json -->
@section('scripts')
<script>
  $(document).ready(function(){
  //Ejecuta Funciones una vez cargada en su totalidad de una Dom

    $('.btn-delete').click(function(event) {
      event.preventDefault();
      var row = $(this).parents('tr');
      var id = $(row).data('id');
      var form = $('#frm_delete');
      var action = decodeURIComponent($(form).attr('action'));
      var url = action.replace(':USERS_ID',id);
      var data = form.serialize();
      $.post(url, data, function(result) {
        console.log(result.msg);
        row.fadeOut();
      }).fail(function() {
        alert('No se pudo eliminar');
      });
    });
  });
</script>
@endif
@if((Auth::User()->is_student))
<h1 align="center">Tus Datos</h1>
    @foreach($user as $user)
        <h2>Nombre: {{$user->name}}</h2>
        <h2>Apellido: {{$user->lastname}}</h2>
        <h2>DNI: {{$user->dni}}</h2>
        <h2>E-mail: {{$user->email}}</h2>
        <h2>Telefono: {{$user->phone}}</h2>
        <h2>Fecha de Nacimiento: {{$user->date_birth}}</h2>
        <h2> Calle {{$user->street}} N°{{$user->number}}</h2>
    @endforeach  
  @endif
@endsection
