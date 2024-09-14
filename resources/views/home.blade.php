@extends('layouts.main')

@section('hero')
<div>HERO HOME</div>
@endsection

@section('content')
<div class="container my-5">
    <h1>Lista dei Treni</h1>

    <table>
        <thead>
            <tr>
                <th>Compagnia</th>
                <th>Stazione di Partenza</th>
                <th>Stazione di Arrivo</th>
                <th>Orario di Partenza</th>
                <th>Orario di Arrivo</th>
                <th>Codice Treno</th>
                <th>Numero di Carrozze</th>
                <th>In Orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
            <tr>
                <td>{{ $train->company }}</td>
                <td>{{ $train->departure_station }}</td>
                <td>{{ $train->arrival_station }}</td>
                <td>{{ $train->departure_time }}</td>
                <td>{{ $train->arrival_time }}</td>
                <td>{{ $train->train_code }}</td>
                <td>{{ $train->number_of_carriages }}</td>
                <td>{{ $train->on_time ? 'Sì' : 'No' }}</td>
                <td>{{ $train->cancelled ? 'Sì' : 'No' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('titlePage')
Lista Treni
@endsection