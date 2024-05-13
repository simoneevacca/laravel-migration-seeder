@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Tutti i treni</h1>
        <div class="row">
            @forelse ($trains as $train)
                <div class="col col-3">
                    <div class="card">
                        <div>Compagnia: {{ $train->company }}</div>
                        <div>Partenza da: {{ $train->from_station }}</div>
                        <div>Arrivo a: {{ $train->to_station }}</div>
                        <div>Partenza il: {{ $train->departure }}</div>
                        <div>Arrivo il: {{ $train->arrive }}</div>
                        <div>Codice: {{ $train->train_code }}</div>
                        <div>Carrozze: {{ $train->carriage_number }}</div>
                        <div>{{ $train->is_punctual == 1 ? 'puntuale' : 'in ritardo' }}</div>
                        <div>{{ $train->deleted == 1 ? 'CANCELLATO' : '' }}</div>

                    </div>
                </div>
            @empty
            @endforelse

        </div>
        <a href="{{route('today')}}">guarda i treni di oggi</a>

    </div>
@endsection
