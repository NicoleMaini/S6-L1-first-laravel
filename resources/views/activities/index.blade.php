@extends('template.template')
@section('title', 'Activities')
@section('content')

    <h1>Page activities</h1>

    {{-- @dd($products)  --}}
    {{--  @dump($products)  --}}

    @if ($activities)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">giorno</th>
                    <th scope="col">attività</th>
                    <th scope="col">cosa fare</th>
                    <th scope="col">ora</th>
                    <th scope="col">Completa</th>
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
                        <td>
                            <form action="{{ route('activities.destroy', ['param' => $activity]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-outline-danger">Completa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $activities->links() }}
    @else
        <h2>Non ci sono prodotti</h2>
    @endif


@endsection
