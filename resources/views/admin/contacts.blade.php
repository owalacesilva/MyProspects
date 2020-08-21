@extends('layouts.app')

@section('content')
  <div class="container">
    @if (count($contacts) > 0)
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-4">Todos os Contatos</h4>
          <table class="table table-striped table-hover">
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
              @foreach ($contacts as $contact)
                <tr>
                  <th scope="row">{{ $contact->id }}</th>
                  <td>{{ $contact->display_name }}</td>
                  <td>{{ $contact->email }}</td>
                  <td>{{ $contact->whatsapp }}</td>
                  <td>{{ $contact->created_at }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    @else
      <div class="text-center">
        <h4>Nenhum contato registrado</h4>
      </tr>
    @endif
  </div>
@endsection
