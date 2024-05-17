@extends('layouts.app')


@section('content')
    <div class="container text-center">
        <h1>GDR Weapon</h1>
        <div class="row">
            @foreach ($weapons as $weapon)
                <div class="col">
                    <div class="card">

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