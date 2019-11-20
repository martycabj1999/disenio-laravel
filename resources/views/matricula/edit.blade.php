@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

  <div class="card" style="width: 40rem;">
    <br>
    <br>
    <br>
    <br>
    <div class="card-header"><h2 align="center">Editar Matricula</h2></div>

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

        <form method="POST" action="{{ url('matricula')}}/{{$enrollment->id}}" enctype="multipart/form-data" >
          {!! csrf_field() !!}

          <div class="row">

              <div class="col-12 col-md-6">
                <label for="number">Numero</label>
                <input class="form-control" disabled type="number" name="number" id="nnumberame" value="{{$enrollment->number}}" placeholder="Numero" />
              </div>

              <div class="col-12 col-md-6">
                <label for="date_up">Fecha de Alta:</label>
                <input class="form-control" disabled type="date" name="date_up" id="date_up" value="{{$enrollment->date_up}}" placeholder="Fecha de Alta" />
              </div>

          </div>
  

          <div class="row">
            <div class="col-12 col-md-6">
              <label for="scholarships_id">Beca:</label>
              <select class="form-control" id="scholarships_id" name="scholarships_id">
                <option value="">Seleccione una Beca</option>
                @foreach($scholarships as $scholarship)
                  <option value="{{ $scholarship->id }}"
                    @if(isset($enrollment->scholarship) and $enrollment->scholarship->id==$scholarship->id)
                      selected
                    @endif
                    >{{ $scholarship->name }}
                  </option>
                @endforeach
              </select>
            </div>  
            <div class="col-12 col-md-6">
              <label for="divisions_id">Ciudad:</label>
              <select class="form-control" id="divisions_id" name="divisions_id">
                <option value="">Seleccione una Ciudad</option>
                @foreach($divisions as $division)
                  <option value="{{ $division->id }}"
                    @if(isset($enrollment->division) and $enrollment->division->id==$division->id)
                      selected
                    @endif
                    >{{ $division->classroom }}
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
              <a href="{{ url('matricula') }}" class="btn btn-warning btn-block">Volver</a>
            </div>

          </div>
        </form>
      </div>
  </div>
</div>
@endsection
