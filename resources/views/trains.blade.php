@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1>Lista Treni</h1>
        <ol>
            @forelse($trains as $train)
                <li class='mb-4'>
                    <strong>Compagnia: </strong> {{ $train->company }} <br>
                    <strong>Partenza: </strong> {{ $train->departure_station }}, {{ $train->departure }} <br>
                    <strong>Arrivo: </strong> {{ $train->arrival_station }}, {{ $train->arrival }} <br>
                    <strong>Carrozze: </strong> {{ $train->carriages }}<br>
                </li>
            @empty
                <h2>Non ci sono risultati</h2>
            @endforelse
        </ol>
    </section>
@endsection
