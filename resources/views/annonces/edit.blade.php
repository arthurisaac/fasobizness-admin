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
                        <option>Immobilier (vente et location)</option>
                        <option>Articles pour bébés et enfants</option>
                        <option>Vêtements et accessoires pour hommes</option>
                        <option>Vêtements et accessoires pour femmes</option>
                        <option>Beauté et Santé</option>
                        <option>Informatique et accessoires</option>
                        <option>Téléphones, tablettes et accessoires</option>
                        <option>Auto-moto</option>
                        <option>Electroménager, articles et linge de maison</option>
                        <option>Meubles et décoration d'intérieur</option>
                        <option>Image, son, et jeux vidéo</option>
                        <option>Electronique et solaire</option>
                        <option>Agrobusiness, alimentation et restauration</option>
                        <option>Art, sport, et divertissement</option>
                        <option>Services, emplois et formations</option>
                        <option>Matériels de construction et équipements professionnels</option>
                        <option>Commerce général</option>
                        <option>Autres catégories</option>
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
