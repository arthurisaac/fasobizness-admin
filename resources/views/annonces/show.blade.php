@extends('popupBase')

@section('main')

    <br>
    <br>
    <div class="ui container">
        @if ($annonce)
            <h1 class="ui horizontal divider header">{{ strtoupper($annonce->titre) }}</h1>
            <br>
            <div class="fotorama" data-nav="thumbs" data-allowfullscreen="true" data-fit="cover" data-fit="contain"
                 data-width="100%" data-height="500" data-swipe="false">
                @foreach($annonce->illustrations as $illustration)
                    <img src="{{ $illustration->nom  }}" height="300" alt=""/>
                @endforeach
            </div>
            <h2 class="ui dividing header">Description</h2>
            <p style="white-space: pre; line-height: 1.7;">{{$annonce->texte}}</p>
            <div class="ui placeholder segment">
                <h3>Prix: {{$annonce->prix}}</h3>
                <p>
                    Ville: {{$annonce->location}} <i class="marker red icon"></i><br>
                    Categorie: {{$annonce->categorie}} <i class="checkmark icon"></i>
                </p>
                <h3>Contacts</h3>
                @if ($annonce->tel) <p>Tel: {{ $annonce->tel }} <i class="phone icon"></i></p> @endif
                @if ($annonce->tel1) <p>Tel: {{ $annonce->tel2 }} <i class="phone icon"></i></p> @endif
                @if ($annonce->tel2) <p>Tel: {{ $annonce->tel3 }} <i class="phone icon"></i></p> @endif
            </div>

            <h2 class="ui header">
                <img src="{{ $annonce->personne->photo }}" class="ui circular image">
                <div class="content">
                    {{$annonce->personne->nom_pers}}
                    <div class="sub header">{{$annonce->personne->type}}</div>
                </div>
            </h2>
            <br>
            <button class="ui primary right labeled icon button"
                    onclick="popup( '{{ route('annonces.edit', $annonce->id_ann) }}', '{{ $annonce->titre }}')">
                <i class="edit icon"></i>
                Modifier
            </button>
            <br>
            <br>
        @else
            <h1>Indisponible</h1>
        @endif
    </div>

@endsection
