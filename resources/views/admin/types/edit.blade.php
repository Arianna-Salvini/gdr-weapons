@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header fs-4 text-secondary text-center medieval">
                        <h2>Edit Class</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.types.update', $type) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="Enter name" value="{{ $type->name }}">

                                @error('name')  
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                    placeholder="Enter description" rows="20">{{ $type->description }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection