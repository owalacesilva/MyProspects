@extends('layouts.app')

@section('content')
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_home') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_users') }}">Usuários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_contacts') }}">Contatos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin_settings') }}">Configuracao</a>
          </li>
        </ul>
      </div>
    </nav>

    <form role="form" class="form" method="post" action="{{ route('admin_update_whatsapp') }}">
      @csrf
      <div class="form-group">
        <label for="whatsapp" class="control-label">WhatsApp {{ auth()->user()->whatsapp }}</label>
        <input type="text" id="whatsapp" name="whatsapp" class="form-control" />
      </div>
      <div class="text-right">
        <button type="submit" class="btn btn-success">Salvar WhatsApp</button>
      </div>
    </form>
  </div>
@endsection
