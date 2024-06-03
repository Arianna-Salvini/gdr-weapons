@extends('layouts.admin')


@section('content')
    <div class="container">

        <h1 class="display-2 fw-bolder">Modify your character here</h1>


        <form action="{{ route('admin.characters.update', $character) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelper"
                    placeholder="" value="{{ old('title', $character->name) }}" />
                <small id="nameHelper" class="form-text text-muted">Edit the name here</small>
            </div>

            <div>
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="8">{{ old('description', $character->description) }}</textarea>
                <small id="descriptionHelper" class="form-text text-muted">Edit the description here</small>


            </div>

            <div class="mb-3 text-dark">
                <label for="type_id" class="form-label d-block text-dark">Type</label>

                <div class="form-check ">

                    @foreach ($types as $type)
                        <input name="type" type="checkbox" class="btn-check " id="tag-{{ $type->id }}"
                            value="{{ $type->id }}" autocomplete="off">
                        <label class="btn text-dark" for="tag-{{ $type->id }}">{{ $type->name }}
                        </label>
                    @endforeach
                </div>

            </div>

            <div class="mb-3">
                <label for="attack" class="form-label">attack</label>
                <input type="text" class="form-control" name="attack" id="attack" aria-describedby="attackHelper"
                    placeholder="" value="{{ old('description', $character->attack) }}" />
                <small id="attackHelper" class="form-text text-muted">Edit the attack here</small>
            </div>

            <div class="mb-3">
                <label for="defense" class="form-label">defense</label>
                <input type="text" class="form-control" name="defense" id="defense" aria-describedby="defenseHelper"
                    placeholder="" value="{{ old('description', $character->defense) }}" />
                <small id="defenseHelper" class="form-text text-muted">Edit the defense here</small>
            </div>

            <div class="mb-3">
                <label for="speed" class="form-label">speed</label>
                <input type="text" class="form-control" name="speed" id="speed" aria-describedby="speedHelper"
                    placeholder="" value="{{ old('description', $character->speed) }}" />
                <small id="speedHelper" class="form-text text-muted">Edit the speed here</small>
            </div>


            <button type="submit" class="btn btn-primary">
                Update
            </button>


        </form>

    </div>
@endsection
