@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark" style="color:white">Users</div>

                    <div class="card-body bg-dark">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" style="color:white">#</th>
                                <th scope="col" style="color:white">Name</th>
                                <th scope="col" style="color:white">Email</th>
                                <th scope="col" style="color:white">Roles</th>
                                <th scope="col" style="color:white">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row" style="color:#dcdcdc">{{ $user->id }}</th>
                                    @can('view-users')
                                        <td><a href="{{ url('user/view/'.$user->id) }}">{{ $user->name }}</a></td>
                                    @endcan
                                    <td style="color:#dcdcdc">{{ $user->email }}</td>
                                    <td style="color:#dcdcdc">{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
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
