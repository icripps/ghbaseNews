@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($users as $user)
            <div class="col-md-4 mt-2 mb-2">
                <div class="card">
                        <img class="card-img-top" src="{{ $user->avartar }}" alt="{{ $user->avartar }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->first_name }} {{ $user->last_name }}</h5>
                        <p class="card-text">{{ $user->created_at }}</p>
                        <a href="" class="btn btn-primary">Go to User</a>
                    </div>
                </div>
            </div>
    @endforeach
</div>

<div class="col-md-12">
        {{ $users->links() }}
    </div>

@endsection
