@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark border-warning">
                    <h5 class="card-header border-warning" style="color:#ffcc00">Dashboard</h5>

                    <div class="card-body bg-dark" style="color:#ffcc00">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert" style="color:#ffcc00">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
