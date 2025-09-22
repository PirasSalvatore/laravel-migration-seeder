@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h2 class="text-center">Elenco dei treni</h2>
    <table class="table table-primary table-striped">
        <thead>
            <tr>
                <th>Compagnia</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Orario di partenza</th>
                <th>Orario di arrivo</th>
                <th>Codice Treno</th>
                <th>Numero Carrozze</th>
                <th>In orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->agency }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->carriages_number }}</td>
                    <td>{{ $train->on_time ? 'Sì' : 'No' }}</td>
                    <td>{{ $train->cancelled ? 'Sì' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center">
    <p>Grazie per aver scelto il nostro servizio di prenotazione treni.</p>
    </div>
@endsection