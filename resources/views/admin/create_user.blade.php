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
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin_users') }}">Usuários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_contacts') }}">Contatos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_settings') }}">Configuracao</a>
          </li>
        </ul>
      </div>
    </nav>

    <form role="form" class="form" method="post" action="{{ route('admin_create_user') }}">
      @csrf
      <div class="form-group">
        <label for="display_name" class="control-label">Nome Completo</label>
        <input type="text" id="display_name" name="display_name" class="form-control" required />
      </div>
      <div class="form-group">
        <label for="username" class="control-label">Nome de Usuário</label>
        <input type="text" id="username" name="username" class="form-control" required />
      </div>
      <div class="form-group">
        <label for="email" class="control-label">E-mail</label>
        <input type="email" id="email" name="email" class="form-control" required />
      </div>
      <div class="form-group">
        <label for="whatsapp" class="control-label">WhatsApp</label>
        <input type="text" id="whatsapp" name="whatsapp" class="form-control" />
      </div>
      <div class="form-group">
        <label for="password" class="control-label">Digite a Senha</label>
        <input type="password" id="password" name="password" class="form-control" required />
      </div>
      <div class="form-group">
        <label for="password_confirmation" class="control-label">Digite novamente a senha</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required />
      </div>
      <div class="text-right">
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>
    </form>
  </div>
@endsection
