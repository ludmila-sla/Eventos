@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o seu evento</h1>
 
  <form method="POST" action="/events">
    


    <div class="form-group">
     
      <label for="title">Evento:</label>
  
      <input type="text" class="form-control" id="title" name="title"  placeholder="Nome do evento">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </div>
    
    <div class="form-group">
      <label for="date">Data do evento:</label>
      <input type="date" class="form-control" id="date" name="date">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </div>
    <div class="form-group">
        <label for="title">Cidade:</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      </div>
      <div class="form-group">
        <label for="title">Adicione itens de infraestrutura:</label>
        <div class="form-group">	
          <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </div>
        <div class="form-group">	
          <input type="checkbox" name="items[]" value="Palco"> Palco
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </div>
        <div class="form-group">	
          <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </div>
        <div class="form-group">	
          <input type="checkbox" name="items[]" value="Open Food"> Open food
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </div>
        <div class="form-group">	
          <input type="checkbox" name="items[]" value="Brindes"> Brindes
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </div>
      </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>

@endsection