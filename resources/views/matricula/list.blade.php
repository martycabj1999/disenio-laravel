@extends('layouts.app')
@section('content')
  <!-- Listado de Usuarios -->

  <br>
  <br>
  <br>
  <br>
  
  @if(!(Auth::User()->is_student))
  <h2 align="center">Panel de Administracion - Matricula</h2>

  <br>
  <div class="row justify-content-center">
    <a href="{{ url('matricula/alta') }}" class="btn btn-success " role="button" aria-pressed="true">Crear Matricula</a>
  </div>
  <br>
  <br>

  <table class="table table-hover">
    <theader>
    <tr><th>Numero </th><th>Fecha de Alta</th><th>Nombre</th><th>ID Beca</th><th>ID Division</th>
    @foreach($enrollments as $enrollment)
      <tr data-id="{{$enrollment->id}}">
        <td>{{$enrollment->number}}</td>
        <td>{{$enrollment->date_up}}</td>
        @foreach($users as $user)
        @if($user->id == $enrollment->users_id)
        <td>{{$user['name']}}</td>
        @endif
        @endforeach
        @foreach($scholarships as $scholarship)
        @if($scholarship->id == $enrollment->scholarships_id)
        <td>{{$scholarship['name']}}</td>
        @endif
        @endforeach
        @foreach($divisions as $division)
        @if($division->id == $enrollment->divisions_id)
        <td>{{$division['classroom']}}</td>
        @endif
        @endforeach
        
        <td>
        @if(!(Auth::User()->is_student))
          <a href='{{ url('matricula') }}/editar/{{$enrollment->id}}' title="Editar"><i class="fa fa-edit"></i></a>
          <a href='#' title="Eliminar" class="btn-delete"><i class="fa fa-times"></i></a>
        @endif
        </td>

      </tr>
    @endforeach
  </table>
  
  {!! $enrollments->render() !!}
  {!! Form::open(['url' => ['matricula', ':ENROLLMENTS_ID'], 'method' => 'DELETE', 'id' => 'frm_delete' ]) !!}
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
      var url = action.replace(':ENROLLMENTS_ID',id);
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
  <h1 align="center">Tu Matricula</h1>
  @foreach ($user as $user)
    <h1 align="center">{{$user->name}} {{$user->lastname}}</h1>
  @endforeach
  @foreach ($enrollment as $enrollment)
    <h2>Numero: {{$enrollment->number}}</h2>
    <h2>Fecha de Alta: {{$enrollment->date_up}}</h2>
    @foreach($scholarships as $scholarship)
      @if($scholarship->id == $enrollment->scholarships_id)
        <h2>Beca: {{$scholarship['name']}}</h2>
      @endif
    @endforeach
    @foreach($divisions as $division)
      @if($division->id == $enrollment->divisions_id)
        <h2>Division: {{$division['classroom']}}</h2>
      @endif
    @endforeach
  @endforeach
         
@endif
@endsection
