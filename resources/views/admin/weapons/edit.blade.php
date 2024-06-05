@extends('layouts.admin')


@section('content')
    <div class="bg-dark text-white">
        <div class="container">
            <h1>Nuovo Progetto</h1>
        </div>
    </div>
    <div class="container py-3">
        <form action="{{ route('admin.weapons.update', $weapon) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    aria-describedby="helpId" placeholder="Inserisci il Titolo del Progetto" value="{{ $weapon->name }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>

            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    aria-describedby="helpId" placeholder="Inserisci il Tipo di arma" value="{{ $weapon->type }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>

            </div>

            <div class="mb-3">
                <label for="" class="form-label">Category</label>
                <input type="text" class="form-control @error('category') is-invalid @enderror" name="category"
                    id="category" aria-describedby="helpId" placeholder="Inserisci la cateogira della tua arma"
                    value="{{ $weapon->category }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Weight</label>
                <input type="text" class="form-control @error('weight') is-invalid @enderror" name="weight"
                    id="weight" aria-describedby="helpId" placeholder="Inserisci il peso dell'arma"
                    value="{{ $weapon->weight }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Cost</label>
                <input type="text" class="form-control @error('cost') is-invalid @enderror" name="cost" id="cost"
                    aria-describedby="helpId" placeholder="Inserisci il costo dell'arma" value="{{ $weapon->cost }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Damage dice</label>
                <input type="text" class="form-control @error('damage_dice') is-invalid @enderror" name="damage_dice"
                    id="damage_dice" aria-describedby="helpId" placeholder="Inserisci il dado di danno"
                    value="{{ $weapon->damage_dice }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            <button type="submit" class="btn btn-primary">
                Invia
            </button>


        </form>
    </div>
@endsection
