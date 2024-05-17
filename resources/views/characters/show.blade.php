@extends('layouts.app')


@section('content')
    <div class="container text-center">
        <h1>Character</h1>
        <div class="row">
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
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-dark" href="{{route('character.index')}}">Back</a>
                    </div>

                </div>
        </div>
    </div>
@endsection
