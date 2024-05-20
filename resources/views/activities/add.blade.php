@extends('template.template')
@section('title', 'Add Page')
@section('content')
    {{-- <x-form btn='Inserisci'>Inserisci i tuoi prodotti</x-form> --}}
    <div class="container mt-5">
        <h2 class="my-5 text-center">Inserisci i tuoi prodotti</h2>
        <form class="mb-5" action="{{ route('activities.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Giorno</label>
                <input type="text" class="form-control" name="date" value="">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Attività</label>
                <input type="text" class="form-control" name="title" value="">
            </div>
            <div class="mb-3">
                <label for="fragrances" class="form-label">Ora</label>
                <input type="text" class="form-control" name="hour" value="">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" rows="3" value=""></textarea>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary">Inserisci</button>
            </div>
        </form>
    </div>

@endsection
