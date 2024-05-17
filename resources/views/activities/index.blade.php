@extends('template.template')
@section('title', 'Activities')
@section('content')

    <h1>Page activities</h1>

    {{-- @dd($products)  --}}
    {{--  @dump($products)  --}}
    @if ($products)
        <ul>
            @foreach ($products as $product)
                <li>{{ $product }}</li>
            @endforeach
        </ul>
    @else
        <h2>Non ci sono prodotti</h2>
    @endif


@endsection
