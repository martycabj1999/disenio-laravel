@extends('layouts.app')
@section('content')
  <!-- Listado de Becas -->

  <br>
  <br>
  <br>
  <br>
  <h2 align="center">Panel de Administracion - Division</h2>

  <br>
  <!--<div class="row justify-content-center">
    <a href="{{ url('division/alta') }}" class="btn btn-success " role="button" aria-pressed="true">Crear Division</a>
  </div>-->
  <br>
  <br>

  <table class="table table-hover">
    <theader>
    <tr><th>ID </th><th>Salon</th><th>Aula</th><th>Año</th>
    @foreach($divisions as $division)
      <tr data-id="{{$division->id}}">
        <td>{{$division->id}}</td>
        <td>{{$division->classroom}}</td>
        <td>{{$division->name}}</td>
        <td>{{$division->years_id}}</td>
        <td>
          @if(!(Auth::User()->is_student))
          <!--<a href='{{ url('division') }}/editar/{{$division->id}}' title="Editar"><i class="fa fa-edit"></i></a>-->
          <a href='#' title="Eliminar" class="btn-delete"><i class="fa fa-times"></i></a>
          @endif
        </td>

      </tr>
    @endforeach
  </table>
  {!! $divisions->render() !!}
  {!! Form::open(['url' => ['division', ':DIVISIONES_ID'], 'method' => 'DELETE', 'id' => 'frm_delete' ]) !!}
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
      var url = action.replace(':DIVISIONES_ID',id);
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
