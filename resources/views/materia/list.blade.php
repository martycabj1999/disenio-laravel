@extends('layouts.app')
@section('content')
  <!-- Listado de Becas -->

  <br>
  <br>
  <br>
  <br>
  <h2 align="center">Panel de Administracion - Materia</h2>

  <br>
  @if(!(Auth::User()->is_student))
  <div class="row justify-content-center">
    <a href="{{ url('materia/alta') }}" class="btn btn-success " role="button" aria-pressed="true">Crear Materia</a>
  </div>
  @endif
  <br>
  <br>

  <table class="table table-hover">
    <theader>
    <tr><th>ID </th><th>Nombre</th><th>Descripcion</th><th>Año</th><th>Departamento</th>
    @foreach($matters as $matter)
      <tr data-id="{{$matter->id}}">
        <td>{{$matter->id}}</td>
        <td>{{$matter->name}}</td>
        <td>{{$matter->description}}</td>
        <td>{{$matter->years_id}}</td>
        <td>{{$matter->departments_id}}</td>
        <td>
        @if(!(Auth::User()->is_student))
          <a href='{{ url('materia') }}/editar/{{$matter->id}}' title="Editar"><i class="fa fa-edit"></i></a>
          <a href='#' title="Eliminar" class="btn-delete"><i class="fa fa-times"></i></a>
        @endif
        </td>

      </tr>
    @endforeach
  </table>
  {!! $matters->render() !!}
  {!! Form::open(['url' => ['materia', ':MATERIAS_ID'], 'method' => 'DELETE', 'id' => 'frm_delete' ]) !!}
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
      var url = action.replace(':MATERIAS_ID',id);
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

@endsection
