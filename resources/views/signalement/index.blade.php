@extends('base')

@section('main')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Signalement
                    <div class="page-title-subheading">Index des signalements
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Table bordered</h5>
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Raison</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($signalements as $signal)
                        <tr>
                            <th>{{$signal->id}}</th>
                            <td>{{$signal->created_at}}</td>
                            <td>{{$signal->raison}}</td>
                            <td>
                                @if ($signal->element == "annonce")
                                    <button class="btn btn-primary btn-sm" onclick="popup('{{route('annonces.show', $signal->id_element)}}', '{{$signal->id_element}}')">Voir l'annonce</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div>
        {{$signalements->links()}}
    </div>

@endsection
