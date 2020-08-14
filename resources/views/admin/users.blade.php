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

    <div>
      <a href="{{ route('admin_new_user') }}" class="btn btn-primary">Criar Usuário</a>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Usuário</th>
          <th scope="col">E-mail</th>
          <th scope="col">WhatsApp</th>
          <th scope="col">Registrado em</th>
        </tr>
      </thead>
      <tbody>
        @if (count($users) > 0)
            @foreach ($users as $user)
              <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->display_name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->whatsapp }}</td>
                <td>{{ $user->created_at }}</td>
              </tr>
            @endforeach
        @else
          <tr>
            <th colspan="5" class="text-center">Nenhum usuário registrado</th>
          </tr>
        @endif
      </tbody>
    </table>
  </div>
@endsection
