@extends('layouts.app')


@section('content')
    <div class="container text-center">
        <h1>All characters</h1>
        <div class="row row-cols-md-4">
            @foreach ($characters as $character)
                <div class="col g-4">
                    <div class="card">
                        <div class="card-title">
                            <h3>{{ $character->name }}</h3>
                        </div>
                        <div class="card-body">
                            <h5>Attack: {{ $character->attack }}</h5>
                            <h5>Defense: {{ $character->defense }}</h5>
                            <h5>Speed: {{ $character->speed }}</h5>
                            <p>{{ $character->description }}</p>
                        </div>

                        <div class="card-footer">
                            <a class="btn btn-primary" href="{{ route('characters.show', $character) }}">Show details</a>
                        </div>
                    </div>

                </div>
            @endforeach
            <div class="col-4">
                <div class="card">

                </div>
            </div>
        </div>
    </div>
@endsection
