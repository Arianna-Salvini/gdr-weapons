@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4 text-center medieval">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <div class="d-flex gap-5 justify-content-center">
                            <a class="btn btn-danger my-5 btn-lg text-white" href="{{ url('/admin/weapons') }}">Manage
                                Weapons</a>
                            <a class="btn btn-danger my-5 btn-lg text-white" href="{{ url('/admin/characters') }}">Manage
                                Characters</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
