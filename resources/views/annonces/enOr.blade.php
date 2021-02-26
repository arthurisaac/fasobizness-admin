@extends('base')

@section('main')

    <link rel="stylesheet" href="{{ asset('css/grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card.min.css') }}">

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-speaker icon-gradient bg-amy-crisp">
                    </i>
                </div>
                <div>Offres en or
                    <div class="page-title-subheading">Annonces et offres en or
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="ui link centered cards" id="post-data">
            @foreach($annonces as $annonce)
                <div class="card"
                     onclick="popup('{{route('annonces.show', $annonce->id_ann)}}', '{{$annonce->id_ann}}')">
                    <div class="image">
                        <img src=" {{ $annonce->illustrations->first()->nom ?? asset("images/no-image.png") }}"
                             style="height: 200px; object-fit: cover">
                    </div>
                    <div class="content">
                        <div class="header">{{$annonce->titre}}</div>
                        <div class="meta">
                            <a>{{$annonce->categorie}}</a>
                        </div>
                        <div class="description"></div>
                    </div>
                    <div class="extra content">
                              <span class="right floated">
                                  {{date('d/m/Y', strtotime($annonce->date_pub))}}
                              </span>
                        <span>
                                <i class="user icon"></i>
                                {{$annonce->personne->nom}}
                              </span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="ajax-load text-center" style="display:none">
            <p>Chargement en cours</p>
            <br>
        </div>
    </div>
    <script>
        let page = 1;
        let lastPage = @json($annonces->lastPage());
        $(window).scroll(function () {
            if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                page++;
                if (page <= lastPage) {
                    loadMoreData(page);
                }
            }
        });

        function loadMoreData(page) {
            $.ajax({
                url: '?page=' + page,
                type: "get",
                beforeSend: function () {
                    $('.ajax-load').show();
                }
            }).done(function (data) {
                if (data.data === []) {
                    $('.ajax-load').html("Plus de données disponible");
                    return;
                }
                $('.ajax-load').hide();
                data.data.map(annonce => {
                    $("#post-data").append(annonceTemplate(annonce.illustrations[0].nom, annonce.titre, annonce.categorie, annonce.date_pub, annonce.personne.nom))
                });
                $("#post-data").append();
                console.log(data)

            })
                .fail(function (jqXHR, ajaxOptions, thrownError) {
                    alert('server not responding...');
                });
        }

        function annonceTemplate(image, titre, caterorie, date_pub, nom) {
            return `<div class="card">
                        <div class="image">
                            <img src="${image}"
                                 style="height: 200px; object-fit: cover">
                        </div>
                        <div class="content">
                            <div class="header">${titre}</div>
                            <div class="meta">
                                <a>${caterorie}</a>
                            </div>
                            <div class="description"></div>
                        </div>
                        <div class="extra content">
                                  <span class="right floated">${date_pub}</span>
                                  <span><i class="user icon"></i>${nom}</span>
                        </div>
                    </div>`;
        }
    </script>

@endsection
