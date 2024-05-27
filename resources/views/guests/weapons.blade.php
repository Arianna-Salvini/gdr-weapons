@extends('layouts.app')

@section('content')
    <div class="container text-center mt-5">
        <h1>GDR Weapons</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mt-3">
            @foreach ($weapons as $weapon)
                <div class="col g-4">
                    <div class="card h-100">
                        <div class="card-header bg-dark text-white">
                            <h3 class="card-title">{{ $weapon->name }}</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><b>Slug:</b> {{ $weapon->slug }}</p>
                            <p class="card-text"><b>Type:</b> {{ $weapon->type }}</p>
                            <p class="card-text"><b>Category:</b> {{ $weapon->category }}</p>
                            <p class="card-text"><b>Weight:</b> {{ $weapon->weight }}</p>
                            <p class="card-text"><b>Cost:</b> {{ $weapon->cost }}</p>
                            <p class="card-text"><b>Damage:</b> {{ $weapon->damage_dice }}</p>
                        </div>
                    </div>

                </div>
            @endforeach

            @empty
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">
                        There are no weapons yet.
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    @endsection
