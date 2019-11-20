@extends('layouts.app')
@section('content')
  <!-- Listado de Becas -->

  <br>
  <br>
  <br>
  <br>
  <h2 align="center">Panel de Administracion - Servicios Complementarios</h2>

  <br>
  @if(!(Auth::User()->is_student))
    <div class="row justify-content-center">
      <a href="{{ url('serviciocomplementario/alta') }}" class="btn btn-success " role="button" aria-pressed="true">Crear Servicio Complementario</a>
    </div>
  @endif
  <br>
  <br>

  <table class="table table-hover">
    <theader>
    <tr><th>ID </th><th>Nombre</th><th>Monto</th><th>Descripcion</th>
    @foreach($complementaryServices as $complementaryService)
      <tr data-id="{{$complementaryService->id}}">
        <td>{{$complementaryService->id}}</td>
        <td>{{$complementaryService->name}}</td>
        <td>{{$complementaryService->amount}}</td>
        <td>{{$complementaryService->description}}</td>
        <td>
        @if(!(Auth::User()->is_student))
          <a href='{{ url('serviciocomplementario') }}/editar/{{$complementaryService->id}}' title="Editar"><i class="fa fa-edit"></i></a>
          <a href='#' title="Eliminar" class="btn-delete"><i class="fa fa-times"></i></a>
        @endif
        </td>

      </tr>
    @endforeach
  </table>
  {!! $complementaryServices->render() !!}
  {!! Form::open(['url' => ['serviciocomplementario', ':SERVICIOCOMPLEMENTARIOS_ID'], 'method' => 'DELETE', 'id' => 'frm_delete' ]) !!}
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
      var url = action.replace(':SERVICIOCOMPLEMENTARIOS_ID',id);
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
