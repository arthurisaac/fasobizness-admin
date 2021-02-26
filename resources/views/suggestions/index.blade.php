@extends('base')

@section('main')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Suggestions
                    <div class="page-title-subheading">Toutes les suggestions.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Tel</th>
                        <th>Texte</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($suggestions as $suggestion)
                        <tr>
                            <th>{{$suggestion->id}}</th>
                            <td>{{$suggestion->nom}}</td>
                            <td>{{$suggestion->tel}}</td>
                            <td>{{$suggestion->texte}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
