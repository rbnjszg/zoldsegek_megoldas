@extends('layouts.main')

@section('title', $title)

@section('content')
    <h1 class="text-center">{{ $title }}</h1>

    <p>
        A zöldség kifejezés konyhatechnikai műszó. Definíciója nem tudományos igényű, nagyrészt önkényes és szubjektív.
        Komplexebb megközelítés a zöldségnövény vagy a zöldségféle kifejezés, ami nemcsak a felhasználásra, hanem a
        termesztésre és a rendszertani sajátosságokra is utalhat, pl. hagymafélék, burgonyafélék stb.
    </p>
    <p>

        A lágy szárú növények bármelyik részét, ami emberi fogyasztásra alkalmas, zöldségnek nevezhetünk, kivéve a
        gabonaféléket, az olajos magvakat, fűszereket és a konyhai értelemben vett gyümölcsöket. A gombákat is zöldségeknek
        szokás tekinteni, holott azok teljesen más biológiai kategóriába tartoznak (valamikor a növények közé sorolták
        őket).
    </p>

    <p>
        A zöldségek közül némelyiknek a levelét fogyasztjuk (például fejes saláta), másnak a hajtását (spárga), gyökerét
        (sárgarépa), virágát (brokkoli), gumóját (fokhagyma) vagy éretlen, húsos magvait (zöldborsó, bab). A zöldségfélékhez
        tartoznak olyan növények is, amelyeknek botanikai értelemben vett termését fogyasztjuk, ilyen az uborka, a tök, az
        avokádó, a paprika és a paradicsom.
    </p>

    <div class="row">
        @foreach ($vegetables as $vegetable)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card" style="height: 30rem">
                    <img src="{{ asset("images/$vegetable[image]") }}" alt="{{ $vegetable['name'] }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-center text-capitalize">
                            {{ $vegetable['name'] }}
                        </h5>
                        <p class="card-text">
                            {{ $vegetable['description'] }}
                        </p>

                    </div>

                    <a href="{{ route('vegetable.show', ['id' => $vegetable['id']]) }}"
                        class="btn btn-success m-3">Részletek</a>

                </div>
            </div>
        @endforeach
    </div>

@endsection
