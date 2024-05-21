@extends('layouts.admin
')


@section('content')
    <div class="container">

        <h1>Create your character here</h1>


        <form action="{{ route('characters.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelper"
                    placeholder="" />
                <small id="nameHelper" class="form-text text-muted">Insert a name here</small>
            </div>


            <div>
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="8"></textarea>

            </div>


            <div class="mb-3">
                <label for="attack" class="form-label">attack</label>
                <input type="text" class="form-control" name="attack" id="attack" aria-describedby="attackHelper"
                    placeholder="" />
                <small id="attackHelper" class="form-text text-muted">Insert a attack here</small>
            </div>

            <div class="mb-3">
                <label for="defense" class="form-label">defense</label>
                <input type="text" class="form-control" name="defense" id="defense" aria-describedby="defenseHelper"
                    placeholder="" />
                <small id="defenseHelper" class="form-text text-muted">Insert a defense here</small>
            </div>

            <div class="mb-3">
                <label for="speed" class="form-label">speed</label>
                <input type="text" class="form-control" name="speed" id="speed" aria-describedby="speedHelper"
                    placeholder="" />
                <small id="speedHelper" class="form-text text-muted">Insert a speed here</small>
            </div>


            <button type="submit" class="btn btn-primary">
                Create
            </button>


        </form>

    </div>
@endsection
