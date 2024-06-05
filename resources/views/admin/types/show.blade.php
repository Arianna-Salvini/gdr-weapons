@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header fs-4 text-secondary text-center medieval">
                        <h2>{{ $type->name }}</h2>
                    </div>
                    <div class="card-body">
                        <p>{{str_replace(". ", ". \n", $type->description)}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection