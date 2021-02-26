@extends('base')

@section('main')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-user icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Utilisateurs
                    <div class="page-title-subheading">Données sensibles des utilisateurs de Faso Biz Ness.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        @foreach($personnes as $personne)
            {{$personne}}
        @endforeach
    </div>
    <div>
        {{$personnes->links()}}
    </div>

@endsection
