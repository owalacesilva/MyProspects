@extends('layouts.app')

@section('content')
  <div class="container">
    @if (count($contacts) > 0)
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-4">{{ __('messages.title_create_purchase_page') }}</h4>
          <form role="form" id="form-purchase-contact" class="form" method="post" action="{{ route('admin_create_purchase') }}">
            @csrf
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="user_id" class="control-label">Usuário destino</label>
                  <select id="user_id" name="user_id" class="form-control" required>
                      <option value>Selecione um usuario</option>
                      @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->username }} - ({{ $user->display_name }})</option>
                      @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <table id="table-purchase-contacts" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col" width="5%">{{ __('messages.contact_id_field') }}</th>
                    <th scope="col" width="15%">{{ __('messages.contact_registered_field') }}</th>
                    <th scope="col">{{ __('messages.contact_name_field') }}</th>
                    <th scope="col">{{ __('messages.contact_email_field') }}</th>
                    <th scope="col" width="15%">{{ __('messages.contact_whastapp_field') }}</th>
                    <th scope="col" width="10%">{{ __('messages.contact_role_field') }}</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($contacts as $contact)
                    <tr>
                      <td>{{ $contact->id }}</td>
                      <td>{{ date('d/m/Y', strtotime($contact->created_at)) }}</td>
                      <td>{{ $contact->display_name }}</td>
                      <td>{{ $contact->email }}</td>
                      <td>{{ $contact->whatsapp }}</td>
                      <td>
                        @if ($contact->role === 'consultor')
                          <label class="badge badge-warning">CONSULTOR</label>
                        @elseif ($contact->role === 'consumidor')
                          <label class="badge badge-success">CONSUMIDOR</label>
                        @endif
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-success">
                {{ __('buttons.btn_create_purchase') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    @else
      <div class="text-center">
        <h4>{{ __('messages.not_contacts_found') }}</h4>
      </tr>
    @endif
  </div>
@endsection
