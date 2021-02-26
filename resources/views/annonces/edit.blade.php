@extends('popupBase')

@section('main')

    <div class="ui container">
        <br>
        <br>
        <button class="ui primary right icon button" onclick="window.history.back()">
            <i class="left arrow icon"></i>
            Retour
        </button>
        <br>
        <br>

        @if ($annonce)
            <form action="{{ route('annonces.update', $annonce->id_ann) }}" class="ui form">
                <div class="field">
                    <label>Titre</label>
                    <input type="text" name="titre" value="{{$annonce->titre}}" required>
                </div>
                <div class="field">
                    <label>Texte</label>
                    <textarea name="texte" rows="10">{{$annonce->texte}}</textarea>
                </div>
                <div class="field">
                    <label>Prix</label>
                    <input type="number" name="titre" value="{{$annonce->prix}}" required>
                </div>
                <div class="field">
                    <label>Ville</label>
                    <input type="text" name="titre" value="{{$annonce->location}}" required>
                </div>
                <div class="field">
                    <label>Categorie</label>
                    <input type="text" name="titre" value="{{$annonce->categorie}}" required>
                </div>
                <div class="field">
                    <label>Tel 1</label>
                    <input type="tel" name="tel1" value="{{$annonce->tel}}" required>
                </div>
                <div class="field">
                    <label>Tel 2</label>
                    <input type="tel" name="tel2" value="{{$annonce->tel1}}" required>
                </div>
                <div class="field">
                    <label>Tel 3</label>
                    <input type="tel" name="tel3" value="{{$annonce->tel3}}" required>
                </div>

                <br>
                <button class="ui primary right labeled icon button">
                    <i class="save icon"></i>
                    Enregistrer
                </button>
            </form>
            <br>
            <br>
        @else
            <h1>Indisponible</h1>
        @endif
    </div>

@endsection
