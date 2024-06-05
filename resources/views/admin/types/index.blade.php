@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header fs-4 text-secondary text-center medieval">
                        <h2>Character Classes</h2>
                        <a class="btn btn-primary align-self-center" href="{{ route('admin.types.create') }}">New Class</a>
                    </div>
                    <div class="card-body">
                        

                        @if (count($types) > 0)
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($types as $type)
                                        <tr>
                                            <td>{{ $type->id }}</td>
                                            <td>{{ $type->name }}</td>
                                            <td>{{ substr($type->description, 0, 100) }}...</td>
                                            <td>
                                                <a class="btn btn-info"
                                                    href="{{ route('admin.types.show', $type) }}">Show</a>
                                                <a class="btn btn-warning"
                                                    href="{{ route('admin.types.edit', $type) }}">Edit</a>
                                                <form action="{{ route('admin.types.destroy', $type) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>'No types found</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
