@extends('template.template')
@section('title', 'Activities')
@section('content')

    <h1>Page activities</h1>

    {{-- @dd($products)  --}}
    {{--  @dump($products)  --}}

    {{-- visualizzare se c'è il messaggio --}}
    @session('success')
        <div class="alert alert-success d-flex align-items-center" role="alert">
            L'attività {{ session('success')->title }} è stata completata
        </div>
    @endsession

    @if ($activities)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">giorno</th>
                    <th scope="col">attività</th>
                    <th scope="col">cosa fare</th>
                    <th scope="col">ora</th>
                    @auth
                        <th scope="col">Completa</th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($activities as $activity)
                    <tr>
                        <td>{{ $activity->date }}</td>
                        <td><a href="{{ route('activities.details', ['param' => $activity]) }}">{{ $activity->title }}</a>
                        </td>
                        <td>{{ $activity->description }}</td>
                        <td>{{ $activity->hour }}</td>
                        @auth
                            <td>
                                @if (Auth::user()->id === $activity->user_id)
                                    <div class="d-flex">
                                        <a class="btn btn-outline-warning me-2"
                                            href="{{ route('activities.edit', ['param' => $activity]) }}">Modifica</a>
                                        <form action="{{ route('activities.destroy', ['param' => $activity]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-outline-danger">Completa</button>
                                        </form>
                                    </div>
                                @endif
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $activities->links() }}
    @else
        <h2>Non ci sono prodotti</h2>
    @endif


@endsection
