@extends('layouts.app')


@section('content')
    <div class="container text-center mt-5">
        <h1>GDR Weapon</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 col-lg-6">
                <div class="card">
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

                <div class="card-footer">
                    <a class="btn btn-danger w-100 mt-5" href="{{ route('weapons.index') }}">Back</a>
                </div>
            </div>

        </div>
    </div>
@endsection
