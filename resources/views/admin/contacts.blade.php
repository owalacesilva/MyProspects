@extends('layouts.app')

@section('content')
  <div class="container">
    @if (count($contacts) > 0)
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-3">All Contacts ({{ count($contacts) }})</h4>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col" width="15%">Registered</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col" width="15%">Phone</th>
                <th scope="col" width="10%">Type</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($contacts as $contact)
                <tr>
                  <td>{{ date('d/m/Y', strtotime($contact->created_at)) }}</td>
                  <td>{{ $contact->display_name }}</td>
                  <td>{{ $contact->email }}</td>
                  <td>{{ $contact->whatsapp }}</td>
                  <td>{{ ucfirst($contact->role) }}</td>
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
