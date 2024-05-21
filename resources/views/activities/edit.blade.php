@extends('template.template')
@section('title', 'Edit Page')
@section('content')
    {{-- <x-form btn='Inserisci'>Modifica il tuo prodott</x-form> --}}

    <div class="container mt-5">
        <h2 class="my-5 text-center">Modifica le tue attività</h2>
        <form class="mb-5" action="{{ route('activities.update', ['param' => $activity]) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Giorno</label>
                <input type="text" class="form-control" name="date" value="{{ $activity->date }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Attività</label>
                <input type="text" class="form-control" name="title" value="{{ $activity->title }}">
            </div>
            <div class="mb-3">
                <label for="fragrances" class="form-label">Ora</label>
                <input type="text" class="form-control" name="hour" value="{{ $activity->hour }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" rows="3" value="{{ $activity->description }}">{{ $activity->description }}</textarea>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary">Aggiorna</button>
            </div>
        </form>
    </div>

@endsection
