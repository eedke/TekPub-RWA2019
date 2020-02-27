@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-warning">
                    <h4 class="card-header bg-dark border-warning" style="color:#ffcc00">Users</h4>

                    <div class="card-body bg-dark">
                        <table class="table">
                            <thead style="border-top: 2px solid #ffcc00; border-bottom: 2.4px solid #ffcc00">
                            <tr>
                                <th scope="col" style="color:orange">#</th>
                                <th scope="col" style="color:orange">Name</th>
                                <th scope="col" style="color:orange">Email</th>
                                <th scope="col" style="color:orange">Roles</th>
                                <th scope="col" style="color:orange">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr style="border-top: 2px solid #ffcc00; border-bottom: 2px solid #ffcc00">
                                    <th scope="row" style="color:orange">{{ $user->id }}</th>
                                    @can('view-users')
                                        <td><a style="font-weight:bold" class="text-warning" href="{{ url('user/view/'.$user->id) }}">{{ $user->name }}</a></td>
                                    @endcan
                                    <td style="color:orange">{{ $user->email }}</td>
                                    <td style="color:orange">{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                    <td>
                                        @can('edit-users')
                                            <a href="{{ route('admin.users.edit', $user->id) }}">
                                                <button type="button" class="btn btn-primary float-left">Edit</button>
                                            </a>
                                        @endcan
                                        @can('delete-users')
                                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST"
                                                  class="float-left">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
