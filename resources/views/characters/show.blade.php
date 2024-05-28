@extends('layouts.app')


@section('content')
    <div class="container text-center mt-5">
        <h1 class="medieval">Character</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h3 class="card-title">{{ $character->name }}</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><b>Attack:</b> {{ $character->attack }}</p>
                        <p class="card-text"><b>Defense:</b> {{ $character->defense }}</p>
                        <p class="card-text"><b>Speed:</b> {{ $character->speed }}</p>
                        <p class="card-text">{{ $character->description }}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-danger w-100 mt-5" href="{{ route('characters.index') }}">Back</a>
                </div>

            </div>
        </div>
    </div>
@endsection
