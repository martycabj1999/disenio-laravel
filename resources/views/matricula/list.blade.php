@extends('layouts.app')
@section('content')
  <!-- Listado de Usuarios -->

  <br>
  <br>
  <br>
  <br>
  <h2 align="center">Panel de Administracion - Matricula</h2>

  <br>
  <div class="row justify-content-center">
    <a href="{{ url('matricula/alta') }}" class="btn btn-success " role="button" aria-pressed="true">Crear Matricula</a>
  </div>
  <br>
  <br>

  <table class="table table-hover">
    <theader>
    <tr><th>Numero </th><th>Fecha de Alta</th><th>ID Beca</th><th>ID Division</th>
    @foreach($enrollments as $enrollment)
      <tr data-id="{{$user->id}}">
        <td>{{$enrollment->number}}</td>
        <td>{{$enrollment->date_up}}</td>
        <td>{{$enrollment->scholarships_id}}</td>
        <td>{{$enrollment->divisions_id}}</td>
        <td>
          <a href='{{ url('matricula') }}/editar/{{$enrollment->id}}' title="Editar"><i class="fa fa-edit"></i></a>
          <a href='#' title="Eliminar" class="btn-delete"><i class="fa fa-times"></i></a>
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

@endsection
