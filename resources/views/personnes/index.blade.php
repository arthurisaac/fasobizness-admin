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
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="#" method="get">
                    <div class="input-group"><input type="search" name="q" class="form-control">
                        <div class="input-group-append">
                            <button class="btn btn-secondary">Rechercher</button>
                        </div>
                    </div>
                </form>

                <br>
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>utilisateur</th>
                        <th>mdp</th>
                        <th>email</th>
                        <th>type</th>
                        <th>tel</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($personnes as $personne)
                        <tr>
                            <th>{{$personne->id_personne}}</th>
                            <td>{{$personne->nom}}</td>
                            <td>{{$personne->prenom}}</td>
                            <td>{{$personne->nom_pers}}</td>
                            <td>{{$personne->mdp}}</td>
                            <td>{{$personne->email}}</td>
                            <td>{{$personne->type}}</td>
                            <td>{{$personne->tel}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>
                <div>
                    {{$personnes->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
