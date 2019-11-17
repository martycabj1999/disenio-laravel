@extends('layouts.app')
@section('content')
  <!-- Listado de Becas -->

  <br>
  <br>
  <br>
  <br>
  <h2 align="center">Panel de Administracion - Becas</h2>

  <br>
  <div class="row justify-content-center">
    <a href="{{ url('beca/alta') }}" class="btn btn-success " role="button" aria-pressed="true">Crear Beca</a>
  </div>
  <br>
  <br>

  <table class="table table-hover">
    <theader>
    <tr><th>ID </th><th>Nombre</th><th>Descuento</th>
    @foreach($scholarships as $scholarship)
      <tr data-id="{{$scholarship->id}}">
        <td>{{$scholarship->id}}</td>
        <td>{{$scholarship->name}}</td>
        <td>{{$scholarship->discount}}</td>
        <td>
          <a href='{{ url('beca') }}/editar/{{$scholarship->id}}' title="Editar"><i class="fa fa-edit"></i></a>
          <a href='#' title="Eliminar" class="btn-delete"><i class="fa fa-times"></i></a>
        </td>

      </tr>
    @endforeach
  </table>
  {!! $scholarships->render() !!}
  {!! Form::open(['url' => ['beca', ':BECAS_ID'], 'method' => 'DELETE', 'id' => 'frm_delete' ]) !!}
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
      var url = action.replace(':BECAS_ID',id);
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
