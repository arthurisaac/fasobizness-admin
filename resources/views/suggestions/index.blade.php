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
        @foreach($suggestions as $suggestion)
            {{$suggestion}}
        @endforeach
    </div>

@endsection
