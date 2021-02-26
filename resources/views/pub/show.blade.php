@extends('popupBase')

@section('main')

    @if ($pub)
        <img src="{{$pub->nom}}" alt="" style="width: 100%; height: 350px; object-fit: cover">
        <br>
        <br>
        <div class="ui container">
            <p style="white-space: pre;">
                {!! html_entity_decode($pub->description) !!}
            </p>


            <div class="owl-carousel owl-theme">
                @foreach($pub->affiches as $affiche)
                    <div class="item">
                        <img src="{{$affiche->nom}}" alt="" style="height: 200px; object-fit: cover;">
                    </div>
                @endforeach
            </div>
            <br>
            <button class="ui primary right labeled icon button"
                    onclick="popup( '{{ route('annonces.edit', $pub->id) }}', '{{ $pub->id }}')">
                <i class="edit icon"></i>
                Modifier
            </button>
            <br>
            <br>
        </div>
    @else
        <p>Indisponible</p>
    @endif

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                400: {
                    items: 3,
                    nav: false
                },
                800: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>

@endsection
