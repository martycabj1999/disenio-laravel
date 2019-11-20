@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

  <div class="card" style="width: 40rem;">
    <br>
    <br>
    <br>
    <br>
    <div class="card-header"><h2 align="center">Editar Alumno</h2></div>

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

        <form method="POST" action="{{ url('usuario')}}/{{$users->id}}" enctype="multipart/form-data" >
          {!! csrf_field() !!}

          <div class="row">

              <div class="col-12 col-md-6">
                <label for="name">Nombre</label>
                <input class="form-control" type="text" name="name" id="name" value="{{$users->name}}" placeholder="Nombre" />
              </div>

              <div class="col-12 col-md-6">
                <label for="lastname">Apellido:</label>
                <input class="form-control" type="text" name="lastname" id="lastname" value="{{$users->lastname}}" placeholder="Apellido" />
              </div>

          </div>
          <div class="row">

              <div class="col-12 col-md-6">
                <label for="dni">DNI</label>
                <input class="form-control" min="0" type="number" name="dni" id="dni" value="{{$users->dni}}" placeholder="Dni" />
              </div>

              <div class="col-12 col-md-6">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" id="email" value="{{$users->email}}" placeholder="Email" />
              </div>

          </div>
          <div class="row">
              <div class="col-12 col-md-6">
                <label for="phone">Telefono</label>
                <input class="form-control" min="0" type="number" name="phone" id="phone" value="{{$users->phone}}" placeholder="Telefono" />
              </div>

              <div class="col-12 col-md-6">
                <label for="date_birth">Fecha de Nacimiento:</label>
                <input class="form-control" type="date" name="date_birth" id="date_birth" value="{{$users->date_birth}}" placeholder="Fecha de Nacimiento" />
              </div>
          </div>
          <div class="row">
              <div class="col-12 col-md-6">
                <label for="street">Calle:</label>
                <input class="form-control" type="text" name="street" id="street" value="{{$users->street}}" placeholder="Calle" />
              </div>

              <div class="col-12 col-md-6">
                <label for="number">Numero:</label>
                <input class="form-control" min="0"  type="number" name="number" id="number" value="{{$users->number}}" placeholder="Numero" />
              </div>
          </div>

          <div class="row">
            <div class="col-12 col-md-6">
              <label for="provinces_id">Provincia:</label>
              <select class="form-control" id="provinces_id" name="provinces_id">
                <option value="">Seleccione una Provincia</option>
                @foreach($provinces as $province)
                  <option value="{{ $province->id }}"
                    @if(isset($users->province) and $users->province->id==$province->id)
                      selected
                    @endif
                    >{{ $province->province_name }}
                  </option>
                @endforeach
              </select>
            </div>  
            <div class="col-12 col-md-6">
              <label for="cities_id">Ciudad:</label>
              <select class="form-control" id="cities_id" name="cities_id">
                <option value="">Seleccione una Ciudad</option>
                @foreach($cities as $city)
                  <option value="{{ $city->id }}"
                    @if(isset($users->city) and $users->city->id==$city->id)
                      selected
                    @endif
                    >{{ $city->city_name }}
                  </option>
                @endforeach
              </select>
            </div>  
          </div>  

          <div class="form-row mt-3">

            <div class="col">
              <button type="submit" class="btn btn-primary btn-block">Modificar</button>
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
