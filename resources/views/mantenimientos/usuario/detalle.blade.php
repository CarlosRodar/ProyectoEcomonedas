@extends('layouts.master')
@section('titulo', '')
@section('contenido')
  <section id="" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="header-section text-center">
        <h2>Información del Usuario</h2>
        <hr class="bottom-line">
      </div>
        <div class="col-md-6 col-sm-6 col-xs-12 left">
          <div class="form-group">
            <h4>Nombre:</h4>
            <input type="text" name="nombreCompleto" class="form-control form" id="nombreCompleto" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="{{$usuario->nombreCompleto}}" disabled/>
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <h4>Correo:</h4>
            <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" value="{{$usuario->email}}" disabled />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <h4>Teléfono:</h4>
            <input type="text" class="form-control" name="subject" id="telefono" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" value="{{$usuario->telefono}}" disabled/>
            <div class="validation"></div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 right">
          <div class="form-group">
            <h4>Residencia:</h4>
            <textarea class="form-control" name="residencia" rows="5" data-rule="required" data-msg="Please write something for us" disabled>{{$usuario->residencia}}</textarea>
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <h4>Tipo de Usuario:</h4>
            <input type="text" class="form-control" name="subject" id="telefono" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" value="{{$usuario->tipoUsuario->descripcion}}" disabled/>
            <div class="validation"></div>
          </div>
        </div>

        <div class="col-xs-12">
          <!-- Button -->
          <a class="btn btn-success" href="{{route('usuarios.mantenimiento')}}">Atrás</a>
        </div>
    </div>
  </div>
</section>
@endsection
