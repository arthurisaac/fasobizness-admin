@extends('base')

@section('main')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-target icon-gradient bg-amy-crisp">
                    </i>
                </div>
                <div>Pubs
                    <div class="page-title-subheading">Toutes les publicités.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui container">
        <div class="ui three stackable cards">
            @foreach($pubs as $pub)
                <div class="card" onclick="popup('{{route('pubs.show', $pub->id)}}', '{{$pub->id}}')">
                    <div class="image">
                        <img src="{{$pub->nom}}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <link rel="stylesheet" href="{{ asset('css/grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card.min.css') }}">

@endsection
