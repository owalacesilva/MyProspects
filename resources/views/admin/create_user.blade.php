@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-4">{{ __('messages.title_add_member_page') }}</h4>
        <form role="form" class="form" method="post" action="{{ route('admin_create_user') }}">
          @csrf
          <div class="row">
            <div class="col-12 col-sm-6">
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
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
