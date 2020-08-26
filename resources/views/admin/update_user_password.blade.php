@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-4">{{ __('messages.title_update_member_password_page') }}</h4>
        <form role="form" class="form" method="post" action="{{ route('admin_users_update_password', $user->username) }}">
          @csrf
          <div class="row">
            <div class="col-12 col-sm-6">
              @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @elseif (session('danger'))
                  <div class="alert alert-danger">
                      {{ session('danger') }}
                  </div>
              @endif
              <div class="form-group">
                <label for="display_name" class="control-label">Nome do Usuário</label>
                <input type="text" id="display_name" class="form-control" value="{{ $user->display_name }}" readonly />
              </div>
              <div class="form-group">
                <label for="password" class="control-label">Digite a nova senha</label>
                <input type="password" id="password" name="password" class="form-control" required />
              </div>
              <div class="form-group">
                <label for="password_confirmation" class="control-label">Digite novamente a nova senha</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required />
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">Atualizar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
