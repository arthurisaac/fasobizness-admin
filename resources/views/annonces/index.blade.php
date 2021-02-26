@extends('base')

@section('main')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-speaker icon-gradient bg-amy-crisp">
                    </i>
                </div>
                <div>Annonces
                    <div class="page-title-subheading">Toutes les offres et annonces.
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--
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
                                {{$annonce->date_pub}}
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
    </div>--}}
    <div class="">
        <div class="row" id="post-data">
            @foreach($annonces as $annonce)
                <div class="col-md-3">
                    <div class="main-card mb-3 card"
                         onclick="popup('{{route('annonces.show', $annonce->id_ann)}}', '{{$annonce->id_ann}}')">
                        <img src=" {{ $annonce->illustrations->first()->nom ?? asset("images/no-image.png") }}"
                             style="height: 200px; object-fit: cover" alt="">
                        <div class="card-body"><h5 class="card-title">{{$annonce->titre}}</h5><h6
                                class="mb-0 card-subtitle">{{$annonce->categorie}}</h6></div>
                        {{--<div class="card-body">
                            {{$annonce->personne->nom}}
                            <small class="text-muted">{{$annonce->date_pub}}</small>
                        </div>--}}
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
                if (data.data.length === 0) {
                    $('.ajax-load').html("Plus de données disponible");
                    return;
                }
                $('.ajax-load').hide();
                data.data.map(annonce => {
                    $("#post-data").append(annonceTemplate(annonce.illustrations[0].nom, annonce.titre, annonce.categorie, annonce.date_pub, annonce.id_ann))
                });
                $("#post-data").append();
                console.log(data)

            })
                .fail(function (jqXHR, ajaxOptions, thrownError) {
                    alert('server not responding...');
                });
        }

        function annonceTemplate(image, titre, caterorie, date_pub, id) {
            /*return `<div class="card" onclick="popup('{{route('annonces.show', $annonce->id_ann)}}', '{{$annonce->id_ann}}')">
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
                    </div>`;*/
            return `<div class="col-md-3">
                                <div class="main-card mb-3 card"
                                     onclick="popup('annonces/${id}', '${titre}')">
                                    <img src="${image}"
                                         style="height: 200px; object-fit: cover" alt="">
                                    <div class="card-body"><h5 class="card-title">${titre}</h5><h6
                                            class="mb-0 card-subtitle">${caterorie}</h6></div>
                        </div>
                    </div>`;
        }
    </script>

@endsection
