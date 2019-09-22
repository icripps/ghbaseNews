@extends('layouts.app')

@section('content')

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-2 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $post->title }}</h5>
                        <a href="{{ route('post.show', ['id'=>$post->id]) }}" class="btn btn-primary">Read Me</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="col-md-12">
            {{ $posts->links() }}
        </div>
@endsection
