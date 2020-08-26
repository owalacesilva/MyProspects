@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-4">{{ __('messages.title_dashboard_page') }}</h4>
        <div class="row">
          <div class="col-12 col-sm-4">
            <a href="{{ route('admin_contacts') }}" class="card-stats">
              <h4>{{ $contacts }}</h4>
              <p>Contatos registrados</p>
              <i class="fa fa-star"></i>
            </a>
          </div>
          <div class="col-12 col-sm-4">
            <a href="{{ route('admin_users') }}" class="card-stats" style="background-color: #ffc107">
              <h4>{{ $users }}</h4>
              <p>Membros cadastrados</p>
              <i class="fa fa-users"></i>
            </a>
          </div>
          <div class="col-12 col-sm-4">
            <a href="{{ route('admin_purchases') }}" class="card-stats" style="background-color: #28a745">
              <h4>{{ $purchases }}</h4>
              <p>Vendas realizadas</p>
              <i class="fa fa-shopping-cart"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
