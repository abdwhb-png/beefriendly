@extends('layouts.app')

@section('content')
<div class="container">
    <h3>
        <small class="text-muted">Tous les utilisateurs ({{ $count_all_users }}) </small>
    </h3>
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert" style="border-left: 14px solid #55b56d!important">
        {{session()->get('success')}}
    </div>
    @endif
    @if(session()->has('fail'))
    <div class="alert alert-danger" role="alert" style="border-left: 14px solid red!important">
        {{session()->get('fail')}}
    </div>
    @endif
    @error('email')
    <div class="alert alert-danger" role="alert" style="border-left: 14px solid red!important">
        {{ $message }}
    </div>
    @enderror
    @error('name')
    <div class="alert alert-danger" role="alert" style="border-left: 14px solid red!important">
        {{ $message }}
    </div>
    @enderror
    @error('password')
    <div class="alert alert-danger" role="alert" style="border-left: 14px solid red!important">
        {{ $message }}
    </div>
    @enderror
    @error('monnetisation')
    <div class="alert alert-danger" role="alert" style="border-left: 14px solid red!important">
        {{ $message }}
    </div>
    @enderror
    <div class="my-2">
        <a href="#" class="btn btn-primary">
            {{ __('Ajouter un utilisateur') }}
        </a>
    </div>
    {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">_ _</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr id="{{ $user->id }}">
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><i class="bi bi-person-badge"></i> {{ $user->username }}</td>
                <td>
                    {{-- Editer --}}
                    <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal"
                        data-bs-target="#edit_{{ $user->id }}">
                        Editer
                    </button>

                    <!-- Editer_Modal -->
                    <div class="modal fade" id="edit_{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-uppercase" id="editLabel">Editer {{ $user->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" method="POST">
                                        @method('PATCH')
                                        @csrf
                                        <div class="mb-3">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name') ?? $user->name }}"
                                                autocomplete="email" placeholder="Name">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') ?? $user->email }}" placeholder="Email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Supprimer --}}
                    <div class="modal fade" id="delete_{{ $user->id }}" aria-hidden="true" aria-labelledby="deleteLabel"
                        tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-danger text-uppercase" id="deleteLabel">Supprimer {{
                                        $user->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Veux-tu réellement supprimer?
                                </div>
                                <div class="modal-footer">
                                    <form action="#" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-primary">Oui</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-danger mx-2" data-bs-toggle="modal" href="#delete_{{ $user->id }}"
                        role="button">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}
</div>
@endsection
