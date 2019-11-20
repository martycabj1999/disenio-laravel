@extends('layouts.app')

@section('content')
<div class="row justify-content-center">

  <div class="card" style="width: 40rem;">
    <br>
    <br>
    <br>
    <br>
    <div class="card-header" align="center"><h2>Alta Materia</h2></div>

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

        <form method="POST" action="{{ url('materia') }}" enctype="multipart/form-data" >
          {!! csrf_field() !!}

          <div class="row">
              <div class="col-12 col-md-12">
                <label for="name">Nombre:</label>
                <input class="form-control"  type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Nombre" />
              </div>
          </div>

          <div class="row">
              <div class="form-group col-12 col-md-12">
                <label for="description">Descripcion:</label>
                <textarea class="form-control"  type="text" name="description" id="description" value="{{ old('description') }}" placeholder="Descripcion" />
                </textarea>
             </div>
          </div>

          <div class="row">

          <div class="col-12 col-md-6">
            <label for="years_id">Año</label>
            <select class="form-control" id="years_id" name="years_id" >
              <option value="">Seleccione una Año</option>
              @foreach($years as $year)
                <option value="{{ $year->id }}">{{ $year->year }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label for="departments_id">Departamento</label>
            <select class="form-control" id="departments_id" name="departments_id" >
              <option value="">Seleccione una Departamento</option>
              @foreach($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
              @endforeach
            </select>
          </div>

          </div>

        <div class="form-row mt-3">

          <div class="col">
            <button type="submit" class="btn btn-primary btn-block">Crear</button>
          </div>

          <div class="col">
            <a href="{{ url('materia') }}" class="btn btn-warning btn-block">Volver</a>
          </div>

        </div>

      </form>
    </div>
  </div>

</div>
@endsection
