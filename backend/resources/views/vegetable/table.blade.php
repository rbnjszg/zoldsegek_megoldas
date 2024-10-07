@extends('layouts.main')

@section('title', $title)

@section('content')
    <div class="container">
        <h3 class="text-center">{{ $title }} - Táblázat</h3>

        <div class="row text-center">
            <form>
                <div class="mb-3">
                    <label class="form-label" for="keres">Mit keresel?</label>
                    <input class="form-control" type="text" id="keres">
                </div>
                <div class="mb-3">

                    <button type="submit" class="btn btn-success">Küldés</button>
                </div>
            </form>
        </div>
        <div class="row">
            <h3>Zöldségek</h3>
            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th>Zöldéség</th>
                        <th>Név</th>
                        <th>Leírás</th>
                    </tr>
                <tbody>
                    @foreach ($vegetables as $vegetable)
                        <tr>
                            <td><img src="{{ asset("images/$vegetable[image]") }}" alt="" class="img-fluid"></td>
                            <td class="text-uppercase align-middle text-center">
                                <h3>{{ $vegetable['name'] }}</h3>
                            </td>
                            <td class="text-justify align-middle ">{{ $vegetable['description'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
                </thead>
            </table>
        </div>
    </div>
@endsection
