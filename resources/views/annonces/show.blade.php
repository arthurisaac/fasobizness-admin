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
            <div class="ui">
                <h3>Prix: {{$annonce->prix}}</h3>
                <p>
                    <i class="marker red icon"></i> Ville: {{$annonce->location}} <br>
                    <i class="checkmark icon"></i> Categorie: {{$annonce->categorie}}
                </p>
                <h3>Contacts</h3>
                @if ($annonce->tel) <p><i class="phone icon"></i> Tel: {{ $annonce->tel }}</p> @endif
                @if ($annonce->tel1) <p><i class="phone icon"></i> Tel: {{ $annonce->tel1 }} </p> @endif
                @if ($annonce->tel2) <p><i class="phone icon"></i> Tel: {{ $annonce->tel2 }}</p> @endif
            </div>

            <div class="ui header">
                <img src="{{ ($annonce->personne->photo === "user.png") ? 'https://fasobizness.com/uploads/user.png' : $annonce->personne->photo }}" class="ui circular image" alt="">
                <div class="content">
                    {{$annonce->personne->nom_pers}}
                    <div class="sub header">{{$annonce->personne->type}}</div>
                </div>
            </div>
            <br>
            <button class="ui primary right labeled icon button"
                    onclick="window.location.href =  '{{ route("annonces.edit", $annonce->id_ann) }}', '{{ $annonce->titre }}'">
                <i class="edit icon"></i>
                Modifier
            </button>
            <br>
            <br>
        @else
            <div style="text-align: center;">
                <h1>Annonce indisponible</h1>
            </div>
        @endif
    </div>

@endsection
