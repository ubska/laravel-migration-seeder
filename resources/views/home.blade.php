@extends('layouts.main')

@section('hero')
<div>HERO HOME</div>
@endsection

@section('content')
<div class="container my-5">
    <h2>Elenco dei Treni</h2>

    <!-- Tabella con classi Bootstrap -->
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
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
                <td>{{ $train->azienda }}</td>
                <td>{{ $train->stazione_partenza }}</td>
                <td>{{ $train->stazione_arrivo }}</td>
                <td>{{ $train->orario_partenza }}</td>
                <td>{{ $train->orario_arrivo }}</td>
                <td>{{ $train->codice_treno }}</td>
                <td>{{ $train->numero_carrozze }}</td>
                <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('titlePage')
{{ $title }}
@endsection