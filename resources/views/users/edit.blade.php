@extends('layouts.front')
@section('title', 'Modification de mon profil')
@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="card-title mb-4">Modification de mon profil</h3>
            @if(session('success'))
                <div class="alert alert-success text-center mb-4" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Prénom</label>
                    <input type="text" name="name" id="name" autocomplete="given-name" class="form-control form-control-sm" value="{{ old('name', $user->name) }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" autocomplete="given-name" class="form-control form-control-sm" value="{{ old('email', $user->email) }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary btn-sm" value="Modifier">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
