@extends('layouts.admin')


@section('content')
    <div class="container text-center mt-5">

        <div class="mb-4">
            <h1 class="medieval">All Characters</h1>
            <a class="btn btn-warning w-25 my-3" href="{{ route('admin.characters.create') }}">Add</a>
        </div>


        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            @forelse ($characters as $character)
                <div class="col g-4">
                    <div class="card h-100">
                        <div class="card-header bg-dark text-white">
                            <h3 class="card-title">{{ $character->name }}</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><b>Attack:</b> {{ $character->attack }}</p>
                            <p class="card-text"><b>Defense:</b> {{ $character->defense }}</p>
                            <p class="card-text"><b>Speed:</b> {{ $character->speed }}</p>
                            <p class="card-text">{{ $character->description }}</p>
                        </div>

                        <div class="card-footer">
                            <a class="btn btn-danger w-100" href="{{ route('admin.characters.show', $character) }}">Show
                               details</a>
                        </div>
                    </div>
                </div>

            @empty
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">
                        There are no characters yet.
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
