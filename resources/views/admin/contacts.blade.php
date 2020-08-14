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
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/users">Usuários</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin/contacts">Contatos</a>
          </li>
        </ul>
      </div>
    </nav>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">E-mail</th>
          <th scope="col">WhatsApp</th>
          <th scope="col">Registrado em</th>
        </tr>
      </thead>
      <tbody>
        @if (count($contacts) > 0)
            @foreach ($contacts as $contact)
              <tr>
                <th scope="row">{{ $contact->id }}</th>
                <td>{{ $contact->display_name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->whatsapp }}</td>
                <td>{{ $contact->created_at }}</td>
              </tr>
            @endforeach
        @else
          <tr>
            <th colspan="5" class="text-center">Nenhum contato registrado</th>
          </tr>
        @endif
      </tbody>
    </table>
  </div>
@endsection
