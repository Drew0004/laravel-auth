@extends('layouts.app')

@section('page-title', 'Crea Nuovo Progetto')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Sei loggato!
                    </h1>
                    <h2 class="text-center my-2">Aggiungi un nuovo progetto</h2>
                </div>
            </div>
            <div>
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="my-3">
                        <label for="title" class="form-label text-white">Titolo*</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="200" required>
                    </div>
                    <div class="my-3">
                        <label for="description" class="form-label text-white">Descrizione*</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Aggiungi una descrizione" maxlength="1024" required></textarea>
                    </div>
                    <div class="my-3">
                        <label for="client" class="form-label text-white">Cliente*</label>
                        <input type="text" class="form-control" id="client" name="client" placeholder="Inserisci il cliente..." maxlength="46" required>
                    </div>
                    <button class="btn btn-primary" type="submit">
                        Aggiungi +
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection