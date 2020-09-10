@extends('layouts.app')
@section('content')


<body background="https://queber.com/wp-content/uploads/2016/08/picjumbo.jpg">
<div class="container">
    <div class="card">
        <div class="card-header">
  <h2>REPORTES UNIVERSIDAD DE LAS FUERZAS ARMADAS ESPE-L</h2>
  <div class="card-group">
    <div class="card card-primary text-center">
      <img class="card-img-top" src="https://static3.avast.com/10001215/web/i/index2/for-business.jpg" alt="Card image cap">
      <div class="card-body">
        <div class="badge badge-primary badge-sm">REPORTES PERIODO</div>
        <div class="card-title">Datos que muestran las carreras por periodo</div>
      </div>
      <div class="card-footer">
        <a href="{{ url('/reportes/barpreferencias') }}" class="btn btn-outline-secondary btn-icon-right">
          <span>GENERAR REPORTE POR PERIODOS
            <img src="https://static3.avast.com/1/web/i/v2/components/arrow-m-right-orange.png" height="24">
          </span>
        </a>
      </div>
    </div>
    <div class="card card-primary text-center circle">
      <img class="card-img-top" src="https://curmat.000webhostapp.com/img/menusugerencia.jpg" alt="Card image cap">
      <div class="card-body">
        <div class="badge badge-primary badge-sm">USO Y GUIAS POR DOCENTES</div>
        <div class="card-title">Datos que exhiben las materias de la UFA</div>

      </div>
      <div class="card-footer">
        <a href="{{ url('/reportes/graficasbarmenus') }}" class="btn btn-outline-secondary btn-icon-right">
          <span>LISTA USO Y GUIAS POR DOCENTE
            <img src="https://static3.avast.com/1/web/i/v2/components/arrow-m-right-orange.png" height="24">
          </span>
        </a>
      </div>
    </div>
    <div class="card card-primary text-center">
      <img class="card-img-top" src="https://curmat.000webhostapp.com/img/menubares.jpg" alt="Card image cap">
      <div class="card-body">
        <div class="badge badge-primary badge-sm">LISTA GUIA POR CARRERAS</div>
        <div class="card-title">Datos que exhiben las guias de carrera por carreras</div>

      </div>
      <div class="card-footer">
        <a href="{{ url('/reportes/guiaclases') }}" class="btn btn-outline-secondary btn-icon-right">
          <span>LISTA DE GUIAS POR CARRERA
            <img src="https://static3.avast.com/1/web/i/v2/components/arrow-m-right-orange.png" height="24">
          </span>
        </a>
      </div>
    </div>
    </div>
    </div>
  </div >
  </div >



@endsection


