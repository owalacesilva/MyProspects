@extends('layouts.app')

@section('content')
  <div class="container">
    @if (count($contacts) > 0)
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6 mb-3">
              <h4 class="card-title mb-3">{{ __('messages.title_contacts_page') }} ({{ count($contacts) }})</h4>
            </div>
            <div class="col-12 col-sm-6 text-sm-right mb-3">
              <a href="{{ route('admin_new_purchase') }}" class="btn btn-primary">
                <i class="fa fa-fw fa-shopping-cart"></i>{{ __('buttons.btn_create_purchase') }}
              </a>
            </div>
          </div>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col" width="1%">{{ __('messages.contact_id_field') }}</th>
                <th scope="col" width="15%">{{ __('messages.contact_registered_field') }}</th>
                <th scope="col">{{ __('messages.contact_name_field') }}</th>
                <th scope="col" width="15%">{{ __('messages.contact_whatsapp_field') }}</th>
                <th scope="col" width="10%">{{ __('messages.contact_role_field') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($contacts as $contact)
                <tr>
                  <td>{{ $contact->id }}</td>
                  <td>{{ date('d/m/Y', strtotime($contact->created_at)) }}</td>
                  <td>{{ $contact->display_name }}</td>
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
      </div>
    @else
      <div class="text-center">
        <h4>{{ __('messages.not_contacts_found') }}</h4>
      </tr>
    @endif
  </div>
@endsection
