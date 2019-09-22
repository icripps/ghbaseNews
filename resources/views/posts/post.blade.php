@extends('layouts.app')

@section('content')

    <div class="row">

            <div class="col-md-8 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2 mb-2">
                @if($images)
                    @foreach ($images  as $image)
                        <img class="img-thumbnail" src="{{ asset($image->url) }}" alt="">
                    @endforeach
                @endif

            </div>
    </div>


@endsection
