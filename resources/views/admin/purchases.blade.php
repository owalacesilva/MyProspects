@extends('layouts.app')

@section('content')
  <div class="container">
    @if (count($purchases) > 0)
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-3">All Purchases ({{ count($purchases) }})</h4>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col" width="10%">Code</th>
                <th scope="col" width="15%">Registered</th>
                <th scope="col">Buyer name</th>
                <th scope="col">Buyer username</th>
                <th scope="col">Buyer email</th>
                <th scope="col" width="15%">Buyer phone</th>
                <th scope="col" width="5%">Contacts</th>
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
