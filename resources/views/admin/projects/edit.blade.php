@extends('layouts.app')

@section('page-title', 'Edit project')

@section('main-content')
  <div>
        <form action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="my-3">
                <label for="title" class="form-label text-white">Titolo*</label>
                <input value="{{ $project->title }}" type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="200" required>
            </div>
            <div class="my-3">
                <label for="description" class="form-label text-white">Descrizione*</label>
                <textarea  class="form-control" id="description" name="description" rows="3" placeholder="Aggiungi una descrizione" maxlength="1024" required>
                {{ $project->description }}
                </textarea>
            </div>
            <div class="my-3">
                <label for="client" class="form-label text-white">Cliente*</label>
                <input value="{{ $project->client }}" type="text" class="form-control" id="client" name="client" placeholder="Inserisci il cliente..." maxlength="46" required>
            </div>
            <button class="btn btn-primary" type="submit">
                Modifica +
            </button>
        </form>
    </div>
@endsection
