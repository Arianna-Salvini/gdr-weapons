@extends('layouts.admin')


@section('content')
    <div class="container text-center mt-5">
        <a name="" id="" class="btn btn-primary" href="{{ route('admin.weapons.create') }}" role="button">Nuova
            Arma</a>
        <h1 class="medieval">GDR Weapons</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mt-3">
            @foreach ($weapons as $weapon)
                <div class="col g-4">
                    <div class="card h-100">
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

                        <div class="card-footer">
                            <a class="btn btn-dark w-100" href="{{ route('admin.weapons.show', $weapon) }}">Show
                                details</a>
                            <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal"
                                data-bs-target="#modalId-{{ $weapon->id }}">
                                Delete
                            </button>

                            <div class="modal fade" id="modalId-{{ $weapon->id }}" tabindex="-1"
                                data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                aria-labelledby="modalTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId-{{ $weapon->id }}">
                                                Attention deleting: {{ $weapon->title }}
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">Sei sicuro di voler procedere all'eliminazione?</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <form action="{{ route('admin.weapons.destroy', $weapon) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
