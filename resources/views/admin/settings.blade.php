@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-4">Configuraçoes</h4>
        <fieldset class="mb-5">
          <legend>Configurar WhatsApp de destino</legend>
          <form role="form" class="form form-async" method="post" action="{{ route('admin_update_whatsapp') }}">
            @csrf
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="whatsapp" class="control-label">Número do WhatsApp</label>
                  <input type="text" id="whatsapp" name="whatsapp" class="form-control" value="{{ auth()->user()->whatsapp }}" required />
                </div>
                <div class="form-group">
                  <label for="message" class="control-label">Mensagem do WhatsApp</label>
                  <textarea rows="3" id="message" name="message" class="form-control" placeholder="Escreva a mensagem aqui...">{{ auth()->user()->message }}</textarea>
                  <small>Máximo de 255 caracteres</small>
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
              </div>
            </div>
          </form>
        </fieldset>
        <hr>
        <fieldset>
          <legend>Configuraçoes de SEO</legend>
          <form role="form" class="form form-async" method="post" action="{{ route('admin_update_seo') }}">
            @csrf
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="seo_name" class="control-label">Nome do Site</label>
                  <input type="text" id="seo_name" name="seo_name" class="form-control" required />
                </div>
                <div class="form-group">
                  <label for="seo_title" class="control-label">Título do Site</label>
                  <input type="text" id="seo_title" name="seo_title" class="form-control" required />
                </div>
                <div class="form-group">
                  <label for="seo_description" class="control-label">Descricao do Négocio</label>
                  <textarea rows="3" id="seo_description" name="seo_description" class="form-control" placeholder="Escreva a mensagem aqui..."></textarea>
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
              </div>
            </div>
          </form>
        </fieldset>
      </div>
    </div>
  </div>
@endsection
