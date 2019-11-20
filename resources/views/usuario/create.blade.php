@extends('layouts.app')

@section('content')
<div class="row justify-content-center">

  <div class="card" style="width: 40rem;">
    <br>
    <br>
    <br>
    <br>
    <div class="card-header" align="center"><h2>Alta Alumno</h2></div>

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

        <form method="POST" action="{{ url('usuario') }}" enctype="multipart/form-data" >
          {!! csrf_field() !!}

          <div class="row">

              <div class="col-12 col-md-6">
                <label for="name">Nombre:</label>
                <input class="form-control"  type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Nombre" />
              </div>

              <div class="form-group col-12 col-md-6">
                <label for="lastname">Apellido:</label>
                <input class="form-control"  type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" placeholder="Apellido" />
              </div>

          </div>

          <div class="row">

              <div class="col-12 col-md-6">
                <label for="dni">Dni:</label>
                <input class="form-control" min="0" type="number" name="dni" id="dni" value="{{ old('dni') }}" placeholder="Dni" />
              </div>

              <div class="form-group col-12 col-md-6">
                <label for="email">Email:</label>
                <input class="form-control"  type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email" />
              </div>

          </div>

          <div class="row">

              <div class="col-12 col-md-6">
                <label for="phone">Telefono:</label>
                <input class="form-control" min="0" type="number" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Telefono" />
              </div>

              <div class="form-group col-12 col-md-6">
                <label for="date_birth">Fecha de Nacimiento:</label>
                <input class="form-control"  type="date" name="date_birth" id="date_birth" value="{{ old('date_birth') }}" placeholder="Fecha de Nacimiento" />
              </div>

          </div>

          <div class="row">

          <div class="col-12 col-md-6">
            <label for="provinces_id">Provincia</label>
            <select class="form-control" id="provinces_id" name="provinces_id" >
              <option value="">Seleccione una Provincia</option>
              @foreach($provinces as $province)
                <option value="{{ $province->province_id }}">{{ $province->province_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label for="cities_id">Ciudad</label>
            <select class="form-control" id="cities_id" name="cities_id" >
              <option value="">Seleccione una Ciudad</option>
              @foreach($cities as $city)
                <option value="{{ $city->city_id }}">{{ $city->city_name }}</option>
              @endforeach
            </select>
          </div>

          </div>
          
          <div class="row">

              <div class="col-12 col-md-6">
                <label for="street">Calle:</label>
                <input class="form-control" type="text" name="street" id="street" value="{{ old('street') }}" placeholder="Calle" />
              </div>

              <div class="form-group col-12 col-md-6">
                <label for="number">Numero:</label>
                <input class="form-control" min="0" type="number" name="number" id="number" value="{{ old('number') }}" placeholder="Numero" />
              </div>

          </div>

        <div class="form-row mt-3">

          <div class="col">
            <button type="submit" class="btn btn-primary btn-block">Crear</button>
          </div>

          <div class="col">
            <a href="{{ url('usuario') }}" class="btn btn-warning btn-block">Volver</a>
          </div>

        </div>

      </form>
    </div>
  </div>

</div>
@endsection
