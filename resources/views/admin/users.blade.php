@extends('layouts.app')

@section('content')
  <div class="container">
    @if (count($users) > 0)
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6 mb-3">
              <h4 class="card-title mb-4">All Members ({{ count($users) }})</h4>
            </div>
            <div class="col-12 col-sm-6 text-sm-right mb-3">
              <a href="{{ route('admin_new_user') }}" class="btn btn-primary">
                <i class="fa fa-fw fa-plus"></i>Add Member
              </a>
            </div>
          </div>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col" width="10%">Status</th>
                <th scope="col">Name</th>
                <th scope="col">Login</th>
                <th scope="col" width="15%">WhatsApp</th>
                <th scope="col" width="15%"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <td>
                    @if ($user->blocked)
                      <label class="badge badge-danger">Bloqueado</label>
                    @else
                      <label class="badge badge-success">Ativo</label>
                    @endif
                  </td>
                  <td>{{ $user->display_name }}</td>
                  <td>{{ $user->username }}</td>
                  <td>{{ $user->whatsapp }}</td>
                  <td>
                    <div class="text-center">
                      <a href="{{ route('admin_users_password', $user->username) }}" title="Alterar senha" style="color: green;">
                        <i class="fa fa-fw fa-lg fa-lock"></i>
                      </a>
                      @if ($user->blocked)
                        <a class="btn-unblock-user" data-user-id="{{ $user->id }}" data-user-name="{{ $user->display_name }}" title="Desbloquear" style="color: gray;">
                          <i class="fa fa-fw fa-lg fa-undo"></i>
                        </a>
                      @else
                        <a class="btn-block-user" data-user-id="{{ $user->id }}" data-user-name="{{ $user->display_name }}" title="Bloquear" style="color: red;">
                          <i class="fa fa-fw fa-lg fa-ban"></i>
                        </a>
                      @endif
                      <a href="{{ route('admin_user_contacts', $user->username) }}" title="Contatos" style="color: blue;">
                        <i class="fa fa-fw fa-lg fa-list-ul"></i>
                      </a>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    @else
      <div class="text-center">
        <h4>Nenhum usuário registrado</h4>
        <div class="mt-3">
          <a href="{{ route('admin_new_user') }}" class="btn btn-primary">
            Add first member
          </a>
        </div>
      </tr>
    @endif
  </div>
@endsection
