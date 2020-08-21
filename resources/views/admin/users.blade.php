@extends('layouts.app')

@section('content')
  <div class="container">
    @if (count($users) > 0)
      <div class="text-right mb-3">
        <a href="{{ route('admin_new_user') }}" class="btn btn-primary">
          <i class="fa fa-fw fa-plus"></i>Novo usuário
        </a>
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
        </tbody>
      </table>
    @else
      <div class="text-center">
        <h4>Nenhum usuário registrado</h4>
        <div class="mt-3">
          <a href="{{ route('admin_new_user') }}" class="btn btn-primary">
            Adicionar primeiro usuário
          </a>
        </div>
      </tr>
    @endif
  </div>
@endsection
