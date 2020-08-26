@extends('layouts.user')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-4">Dashboard</h4>
        <ul class="plans">
          <li class="plan highlight">
            <span class="price price-green">R$ 10,00</span>            
            <div class="details">
              <h1 class="plan-title">Pacote Bronze</h1>
              <p class="plan-description">30 contatos</p>
            </div>            
            <button class="btn select">Quero esse!</button>
          </li>       
          <li class="plan">
            <span class="price price-green">R$ 10,00</span>            
            <div class="details">
              <h1 class="plan-title">Pacote Silver</h1>
              <p class="plan-description">60 contatos</p>
            </div>            
            <button class="btn select">Quero esse!</button>
          </li>
          <li class="plan">
            <span class="price price-green">R$ 10,00</span>            
            <div class="details">
              <h1 class="plan-title">Pacote Gold</h1>
              <p class="plan-description">100 contatos</p>
            </div>            
            <button class="btn select">Quero esse!</button>
          </li>        
        </ul>
      </div>
    </div>
  </div>
@endsection
