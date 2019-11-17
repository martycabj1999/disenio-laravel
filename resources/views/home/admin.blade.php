@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
    <h1>Panel de Administracion</h1>
  </div>
  <br>

  <div class="row justify-content-center">
    <div class="col-auto panel-button">
      <a href="{{ url('usuario') }}" type="button" class="btn btn-primary btn-lg" style="padding:30px;"><i class="fa fa-user-alt fa-fw fa-6x"></i><br><br><b>Usuario</b></a>
    </div>
    <div class="col-auto panel-button">
      <a href="{{ url('matricula') }}" type="button" class="btn btn-primary btn-lg" style="padding:30px;"><i class="fas fa-address-card fa-fw fa-6x"></i><br><br><b>Matricula</b></a>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-auto panel-button">
      <a href="{{ url('beca') }}" type="button" class="btn btn-primary btn-lg" style="padding:30px;"><i class="fa fa-boxes fa-fw fa-6x"></i><br><br><b>Becas</b></a>
    </div>
    
    <div class="col-auto panel-button">
      <a href="{{ url('serviciocomplementario') }}" type="button" class="btn btn-primary btn-lg" style="padding:30px;"><i class="fa fa-cog fa-fw fa-6x"></i><br><br><b>Servicio Complementario</b></a>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-auto panel-button">
      <a href="{{ url('division') }}" type="button" class="btn btn-primary btn-lg" style="padding:30px;"><i class="fas fa-building fa-fw fa-6x"></i><br><br><b>Division</b></a>
    </div>
    <div class="col-auto panel-button">
      <a href="{{ url('materia') }}" type="button" class="btn btn-primary btn-lg" style="padding:30px;"><i class="fas fa-book fa-fw fa-6x"></i><br><br><b>Materia</b></a>
    </div>
  </div>

  

@endsection
