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
            <form action="{{ route('annonces.update', $annonce->id_ann) }}" method="post" class="ui form">
                @csrf
                @method('PATCH')
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
                    <input type="number" name="prix" value="{{$annonce->prix}}">
                </div>
                <div class="field">
                    <label>Ville</label>
                    <input type="text" name="location" value="{{$annonce->location}}" required>
                </div>
                <div class="field">
                    <label for="categorie">Catégorie</label>
                    {{--<input type="text" name="categorie" value="{{$annonce->categorie}}" required>--}}
                    <select id="categorie" class="ui dropdown">
                        <option>{{$annonce->categorie}}</option>
                        <option value="Immobilier (vente et location)">Immobilier (vente et location)</option>
                        <option value="Articles pour bébés et enfants">Articles pour bébés et enfants</option>
                        <option value="Vêtements et accessoires pour hommes">Vêtements et accessoires pour hommes</option>
                        <option value="Vêtements et accessoires pour femmes">Vêtements et accessoires pour femmes</option>
                        <option value="Beauté et Santé">Beauté et Santé</option>
                        <option value="Informatique et accessoires">Informatique et accessoires</option>
                        <option value="Téléphones, tablettes et accessoires">Téléphones, tablettes et accessoires</option>
                        <option value="Auto-moto">Auto-moto</option>
                        <option value="Electroménager, articles et linge de maison">Electroménager, articles et linge de maison</option>
                        <option value="Meubles et décoration d'intérieur">Meubles et décoration d'intérieur</option>
                        <option value="Image, son, et jeux vidéo">Image, son, et jeux vidéo</option>
                        <option value="Electronique et solaire">Electronique et solaire</option>
                        <option value="Agrobusiness, alimentation et restauration">Agrobusiness, alimentation et restauration</option>
                        <option value="Art, sport, et divertissement">Art, sport, et divertissement</option>
                        <option value="Services, emplois et formations">Services, emplois et formations</option>
                        <option value="Matériels de construction et équipements professionnels">Matériels de construction et équipements professionnels</option>
                        <option value="Commerce général">Commerce général</option>
                        <option value="Autres catégories">Autres catégories</option>
                    </select>
                </div>
                <div class="field">
                    <label for="tel">Tel 1</label>
                    <input type="tel" name="tel" id="tel" value="{{$annonce->tel}}" required>
                </div>
                <div class="field">
                    <label for="tel1">Tel 2</label>
                    <input type="tel" name="tel1" id="tel1" value="{{$annonce->tel1}}">
                </div>
                <div class="field">
                    <label for="tel2">Tel 3</label>
                    <input type="tel" name="tel2" id="tel2" value="{{$annonce->tel2}}">
                </div>

                <br>
                <button class="ui primary right labeled icon button" type="submit">
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
