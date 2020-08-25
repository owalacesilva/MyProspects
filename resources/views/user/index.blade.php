@extends('layouts.user')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-4">Dashboard</h4>
        <div class="row">
          <div class="col-12 col-sm-4">
            <a href="{{ url('https://www.mercadopago.com.br/') }}" class="card-stats" target="_blank">
              <h4>R$ 100,00</h4>
              <p>Pacote Bronze</p>
              <i class="fa fa-shopping-cart"></i>
            </a>
          </div>
          <div class="col-12 col-sm-4">
            <a href="{{ url('https://www.mercadopago.com.br/') }}" class="card-stats" target="_blank" style="background-color: #ffc107">
              <h4>R$ 80,00</h4>
              <p>Pacote Prata</p>
              <i class="fa fa-shopping-cart"></i>
            </a>
          </div>
          <div class="col-12 col-sm-4">
            <a href="{{ url('https://www.mercadopago.com.br/') }}" class="card-stats" target="_blank" style="background-color: #28a745">
              <h4>R$ 50,00</h4>
              <p>Pacote Ouro</p>
              <i class="fa fa-shopping-cart"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
