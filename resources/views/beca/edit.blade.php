@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

  <div class="card" style="width: 40rem;">
    <br>
    <br>
    <br>
    <br>
    <div class="card-header"><h2 align="center">Editar Usuario</h2></div>

      <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('beca')}}/{{$scholarship->id}}" enctype="multipart/form-data" >
          {!! csrf_field() !!}

          <div class="row">
              <div class="col-12 col-md-12">
                <label for="name">Nombre</label>
                <input class="form-control" type="text" name="name" id="name" value="{{$scholarship->name}}" placeholder="Nombre" />
              </div>
          </div>
          <div class="row">
              <div class="col-12 col-md-12">
                <label for="discount">Descuento:</label>
                <input class="form-control" type="number" name="discount" id="discount" value="{{$scholarship->discount}}" placeholder="Descuento" />
              </div>

          </div>

          <div class="form-row mt-3">

            <div class="col">
              <button type="submit" class="btn btn-primary btn-block">Modificar</button>
            </div>

            <div class="col">
              <a href="{{ url('beca') }}" class="btn btn-warning btn-block">Volver</a>
            </div>

          </div>
        </form>
      </div>
  </div>
</div>
@endsection
