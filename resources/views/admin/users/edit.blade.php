@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark border-warning">
                    <div class="card-header border-warning" style="color:#ffcc00">Edit user - {{ $user->name }}</div>
                    <div class="card-body">
                        <form action="{{ route('admin.users.update', $user) }}" method="POST">
                            <div class="form-group row">
                                <label for="email" class="col-md-2 col-form-label text-md-right" style="color:#ffcc00">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" style="color:#ffcc00; border: 1px solid #ffcc00"
                                           class="form-control bg-dark @error('email') is-invalid @enderror"
                                           name="email" value="{{ $user->email }}" required autocomplete="email"
                                           autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right"
                                       style="color:#ffcc00">Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" style="color:#ffcc00; border: 1px solid #ffcc00"
                                           class="form-control bg-dark @error('name') is-invalid @enderror" name="name"
                                           value="{{ $user->name }}" required autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group row">
                                <label for="roles" class="col-md-2 col-form-label text-md-right" style="color:#ffcc00">Roles</label>
                                <div class="col-md-6">
                                    @foreach($roles as $role)
                                        <div class="form-check">
                                            <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                                   @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                            <label style="color:#ffcc00">{{ $role->name }}</label>
                                        </div>
                                    @endforeach
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <button type="submit" class="btn btn-warning">
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
