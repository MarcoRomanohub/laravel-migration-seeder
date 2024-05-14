@extends('layout.main')

@section('content')
    <h1>Trains</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">company</th>
                <th scope="col">departure_station</th>
                <th scope="col">arrival_station</th>
                <th scope="col">departure_time</th>
                <th scope="col">arrival_time</th>
                <th scope="col">train_code</th>
                <th scope="col">number_of_carriages</th>
                <th scope="col">on_time</th>
                <th scope="col">canceled</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($trains as $train)
                <tr>
                    <th>{{ $train->company }}</th>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->code }}</td>
                    <td>{{ $train->number_of_carriages }}</td>
                    <td>{{ $train->on_time }}</td>
                    <td>{{ $train->deleted }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection

@section('title')
    Trains
@endsection
