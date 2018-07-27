@extends('layouts.master')
@section('titulo', '')
@section('contenido')

<section id="pricing" class="section-padding">
     @csrf
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <hr>
          <h2>Usuarios</h2>
          <hr>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-left">
            <li class="btn-trial"><a href="{{route('usuarios.crear')}}">Nuevo Usuario</a></li>
          </ul>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 left">
         <div class="form-group">
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-left">
            <li class="btn-trial"><a href="">Mostrar Usuarios Deshabilitados</a></li>
          </ul>
        </div>
        </div>
        </div>

        <br>
        <form action="" method="post"  >
         <div class="col-md-4 col-sm-6 col-xs-12 left">
                   Filtrar por Provincia:
            <div class="form-group">
                     <select name="tipoProvincia" class="form-control form" id="inputGroupSelect04">
                       <option value="0">Todas las Usuarios</option>
                       @foreach ($tipos as $tipo)
                       <option value="{{$tipo->id}}">{{$tipo->descripcion}}</option>
                       @endforeach
                     </select>
          </div>
   </div>
   <div class="col-md col-sm col-xs">
     <br>
     <div class="form-group">
       <ul class="navbar-nav">
           @csrf
           <button type="submit" class="btn btn-info"  name="buscar">Buscar</button>
       </ul>
     </div>
   </div>
</form>


<br>




  </div>
</div>

<br>

    <div class="container">
      <table class="table table-sm table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Detalles</th>
            <th scope="col">Editar</th>
            <th scope="col">Habilitar/Deshabilitar</th>
          </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usu)
              <tr>
                <th scope="row">{{$usu->id}}</th>
                <td>{{$usu->nombreCompleto}}</td>
                <td>{{$usu->email}}</td>
                <td><a href="{{route('usuarios.detalle',['id' => $usu->id])}}" class="btn btn-info">Detalle</a></td>
                <td><a href="" class="btn btn-warning">Editar</a></td>
                @if($usu->deleted_at==false)
                  <td><a href="" class="btn btn-danger">Deshabilitar</a></td>
                @else
                  <td><a class="btn btn-success" href="">Habilitar</a></td>
                @endif
              </tr>
            @endforeach

        </tbody>
      </table>
    </div>
  </section>

  <div class="row">
  <div class="col-md-12 text-center" >
     {{$usuarios->links()}}
  </div>
</div>
@endsection
