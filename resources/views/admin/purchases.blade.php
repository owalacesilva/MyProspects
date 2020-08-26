@extends('layouts.app')

@section('content')
  <div class="container">
    @if (count($purchases) > 0)
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-3">{{ __('messages.title_purchases_page') }} ({{ count($purchases) }})</h4>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col" width="10%">{{ __('messages.purchase_id_field') }}</th>
                <th scope="col" width="15%">{{ __('messages.purchase_registered_field') }}</th>
                <th scope="col">{{ __('messages.purchase_name_field') }}</th>
                <th scope="col">{{ __('messages.purchase_username_field') }}</th>
                <th scope="col">{{ __('messages.purchase_email_field') }}</th>
                <th scope="col" width="15%">{{ __('messages.purchase_whatsapp_field') }}</th>
                <th scope="col" width="5%">{{ __('messages.purchase_contacts_field') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($purchases as $purchase)
                <tr>
                  <td>{{ $purchase->id }}</td>
                  <td>{{ date('d/m/Y', strtotime($purchase->created_at)) }}</td>
                  <td>{{ $purchase->display_name }}</td>
                  <td>{{ $purchase->username }}</td>
                  <td>{{ $purchase->email }}</td>
                  <td>{{ $purchase->whatsapp }}</td>
                  <td>{{ $purchase->total_contacts }}</td>
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
