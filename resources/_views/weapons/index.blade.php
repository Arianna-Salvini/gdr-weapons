@extends('layouts.app')


@section('content')
    <div class="container text-center">
        <h1>GDR Weapon</h1>
        <div class="row row-cols-md-4">
            @foreach ($weapons as $weapon)
                <div class="col g-4">
                    <div class="card">
                        <div class="card-title">
                            <h3>{{ $weapon->name }}</h3>
                        </div>
                        <div class="card-body">
                            <h5>Slug: {{ $weapon->slug }}</h5>
                            <h5>Type: {{ $weapon->type }}</h5>
                            <h5>Category: {{ $weapon->category }}</h5>
                            <h5>Weight: {{ $weapon->weight }}</h5>
                            <h5>Cost: {{ $weapon->cost }}</h5>
                            <h5>Damage: {{ $weapon->damage_dice }}</h5>
                        </div>

                        <div class="card-footer">
                            <a class="btn btn-primary" href="{{ route('weapons.show', $weapon) }}">Show details</a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
